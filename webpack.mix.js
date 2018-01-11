const { mix } = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/app-live.js', 'public/js')
    .js('resources/assets/admin/js/app.js', 'public/admin-assets/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/admin/sass/app.scss', 'public/admin-assets/css')
    .sass('resources/assets/sass/helpers.scss', 'public/css')
    .scripts(['node_modules/jquery/dist/jquery.js',
       'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
   ], 'public/admin-assets/js/bundle.js')
   .styles('node_modules/font-awesome/css/font-awesome.css', 'public/admin-assets/css/vendor.css')
   .styles('node_modules/vuetify/dist/vuetify.css', 'public/css/vuetify.css')
   .autoload({ 'jquery': ['window.$', 'window.jQuery'] })
   .sourceMaps()
   .version();
