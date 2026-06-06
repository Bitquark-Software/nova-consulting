import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/homeScrollHero.js',
                'resources/js/blogVimCursor.js',
                'resources/js/weddingInvitationsScroll.js',
                'resources/css/wedding-invitations.css',
                'resources/css/filament/admin/theme.css',
            ],
            refresh: true,
        }),
    ],
});
