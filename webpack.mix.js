const {mix} = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/helpers.scss', 'public/css');
