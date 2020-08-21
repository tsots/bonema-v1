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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false
    })
    // .copyDirectory("resources/fonts", "public/fonts")
    // .copyDirectory("resources/sass/fonts", "public/fonts")
    .copyDirectory("resources/images", "public/images")
    // .copy("resources/js/slider.js", "public/js")
    .browserSync({
        files: [
            "public/css/app.css",
            "public/*.js",
            "resources/views/**/*.php"
        ],
        proxy: "bonema-v1.dev"
    });
