const { mix } = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/admin/js/app.js', 'public/admin-assets/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/admin/sass/app.scss', 'public/admin-assets/css')
    .sass('resources/assets/sass/helpers.scss', 'public/css')
    .version();
