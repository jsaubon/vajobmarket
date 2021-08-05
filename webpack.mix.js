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
>>>>>>> fdf7bfc071a991f7a2e4e1643abe3e772bb97600
    .options({
        processCssUrls: true
    });
