/**
 * Extract embedded base64 image sequences from Lottie JSON into per-frame files.
 * Produces a slim manifest for scroll-driven canvas scrubbing (progressive load).
 *
 * Usage: node scripts/extract-lottie-frames.mjs [source.json ...]
 * Default sources: public/assets/lottie/*.json
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.join(__dirname, '..');
const lottieDir = path.join(root, 'public/assets/lottie');
const outRoot = path.join(root, 'public/assets/lottie-frames');

function parseDataUri(dataUri) {
    const match = /^data:image\/(\w+);base64,(.+)$/s.exec(dataUri);
    if (!match) return null;
    return { ext: match[1] === 'jpeg' ? 'jpg' : match[1], buffer: Buffer.from(match[2], 'base64') };
}

function extractOne(sourcePath) {
    const baseName = path.basename(sourcePath, '.json');
    const outDir = path.join(outRoot, baseName);
    const framesDir = path.join(outDir, 'frames');

    console.log(`\nExtracting ${baseName}…`);
    const raw = fs.readFileSync(sourcePath, 'utf8');
    const data = JSON.parse(raw);

    const assets = (data.assets || []).filter((a) => typeof a.p === 'string' && a.p.startsWith('data:'));
    if (!assets.length) {
        console.warn(`  No embedded images in ${baseName}, skipping.`);
        return;
    }

    fs.mkdirSync(framesDir, { recursive: true });

    let ext = 'jpg';
    let totalBytes = 0;

    assets.forEach((asset, index) => {
        const parsed = parseDataUri(asset.p);
        if (!parsed) {
            console.warn(`  Frame ${index}: unsupported asset format`);
            return;
        }
        ext = parsed.ext;
        const filename = `${String(index).padStart(4, '0')}.${ext}`;
        fs.writeFileSync(path.join(framesDir, filename), parsed.buffer);
        totalBytes += parsed.buffer.length;
    });

    const ip = data.ip ?? 0;
    const op = data.op ?? assets.length;
    const frameCount = Math.max(1, Math.floor(op - ip));
    const w = data.w ?? 1920;
    const h = data.h ?? 1080;

    const posterFile = `0000.${ext}`;
    fs.copyFileSync(path.join(framesDir, posterFile), path.join(outDir, `poster.${ext}`));

    const manifest = {
        id: baseName,
        source: path.basename(sourcePath),
        frameCount,
        width: w,
        height: h,
        ext,
        fr: data.fr ?? 30,
    };

    fs.writeFileSync(path.join(outDir, 'manifest.json'), JSON.stringify(manifest, null, 2));

    const mb = (totalBytes / 1024 / 1024).toFixed(2);
    console.log(`  ${assets.length} frames → ${outDir}`);
    console.log(`  Total frames size: ${mb} MB (${ext})`);
}

const args = process.argv.slice(2);
const sources = args.length
    ? args.map((p) => path.resolve(p))
    : fs.readdirSync(lottieDir).filter((f) => f.endsWith('.json')).map((f) => path.join(lottieDir, f));

if (!sources.length) {
    console.error('No Lottie JSON files found.');
    process.exit(1);
}

fs.mkdirSync(outRoot, { recursive: true });
sources.forEach(extractOne);
console.log('\nDone. Point the home scroll player at /assets/lottie-frames/<id>/');
