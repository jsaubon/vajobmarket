const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

<<<<<<< HEAD
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
=======
mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
>>>>>>> 7af19c4bd5e50cd8c2ab93cdae32ca50fdff997a
    .options({
        processCssUrls: false
    });
