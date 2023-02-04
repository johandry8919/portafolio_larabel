import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/style.css',
            'resources/js/app.js',
            'resources/js/easing.js',
            'resources/js/main.js',
            'resources/js/waypoints.min.js',
            'resources/js/easing.min.js',
            'resources/js/contact.js',
            'resources/js/jqBootstrapValidation.min.js',
            
        ]),
    ],
});
