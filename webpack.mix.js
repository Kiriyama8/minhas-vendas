const mix = require('laravel-mix');

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

// Resources Boostrap
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// Resources Font Awesome
mix.sass('resources/assets/font-awesome/scss/font-awesome.scss', 'public/assets/font-awesome/css/font-awesome.css');

// Resources SB Admin 2
mix.js('resources/assets/sb-admin-2/js/sb-admin-2.js', 'public/assets/sb-admin-2/js/sb-admin-2.js')
    .sass('resources/assets/sb-admin-2/scss/sb-admin-2.scss', 'public/assets/sb-admin-2/css/sb-admin-2.css');
