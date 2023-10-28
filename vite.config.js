import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // added by temples-dev
                'resources/js/windmil-js/focus-trap.js',
                'resources/js/windmil-js/charts-pie.js',
                'resources/js/windmil-js/charts-lines.js',
                'resources/js/windmil-js/charts-bars.js',
            ],
            refresh: true,
        }),
    ],
});
