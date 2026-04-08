<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $base = rtrim((string) config('app.url'), '/');
        $entries = config('sitemap.entries', []);

        $lines = [
            '<?xml version="1.0" encoding="UTF-8"?>',
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
        ];

        foreach ($entries as $row) {
            $path = $row['path'] ?? '/';
            $loc = $path === '/' ? $base.'/' : $base.$path;
            $lastmod = \Carbon\Carbon::parse($row['lastmod'] ?? now())->toAtomString();
            $priority = $row['priority'] ?? '0.5';
            $esc = static fn (string $s): string => htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');

            $lines[] = '  <url>';
            $lines[] = '    <loc>'.$esc($loc).'</loc>';
            $lines[] = '    <lastmod>'.$esc($lastmod).'</lastmod>';
            $lines[] = '    <priority>'.$esc($priority).'</priority>';
            $lines[] = '  </url>';
        }

        $lines[] = '</urlset>';
        $xml = implode("\n", $lines)."\n";

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
