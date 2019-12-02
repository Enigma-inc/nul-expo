const mix = require("laravel-mix");

mix
  .js("resources/assets/js/app.js", "public/js")
  .js("resources/assets/js/app-live.js", "public/js")
  .js("resources/assets/admin/js/app.js", "public/admin-assets/js")
  .sass("resources/assets/sass/app.scss", "public/css")
  .sass("resources/assets/admin/sass/app.scss", "public/admin-assets/css")
  .sass("resources/assets/sass/helpers.scss", "public/css")
  .sass(
    "resources/assets/sass/2020/theme.scss",
    "public/compiled/css/2020-theme.css"
  )
  .scripts(
    [
      "node_modules/jquery/dist/jquery.js",
      "node_modules/bootstrap-sass/assets/javascripts/bootstrap.js",
      "node_modules/typehead/typehead.js"
    ],
    "public/admin-assets/js/bundle.js"
  )
  .copy("resources/assets/images/", "public/compiled/images/", false)
  //    .styles('node_modules/font-awesome/css/font-awesome.css', 'public/admin-assets/css/vendor.css')
  .styles("node_modules/vuetify/dist/vuetify.css", "public/css/vuetify.css")
  .autoload({ jquery: ["$", "window.jQuery", "jQuery"] })

  .sourceMaps()
  .version();
