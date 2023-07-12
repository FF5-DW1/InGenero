import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'public/css/style.css',
        'public/css/fonts.css',
        'public/css/bootstrap.css',
        'public/js/script.js',
        'public/js/core.min.js'
      ],
      refresh: true,
    }),
  ],
});
