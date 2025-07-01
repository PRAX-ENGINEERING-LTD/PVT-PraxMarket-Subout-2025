import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/assets/scss/style.scss',
                'resources/sass/app.scss',
                'resources/js/app.jsx',
                'resources/css/app.css'
            ],
            refresh: true,
        }),
         react(),
    ],
});
