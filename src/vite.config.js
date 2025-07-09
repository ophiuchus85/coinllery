import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
    base: '/build/',
    plugins: [
        react(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/main.jsx',
                'resources/js/components/LoginStatus.jsx'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    esbuild: {
        jsx: 'automatic',
    },
    server: {
        https: true,
        allowedHosts: [
            'coinllery.io',
            'clean-pony-instantly.ngrok-free.app',
        ],
        /*
        hmr: {
            host: 'clean-pony-instantly.ngrok-free.app',
        },
        */
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
});

