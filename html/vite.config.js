import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
  plugins: [
    laravel({
      input: [
        'node_modules/jquery/dist/jquery.js', 
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
