const { mix } = require('laravel-mix');
const sourceVendor = 'resources/assets/vendor/';
const publicVendor = 'public/vendor/';
const fontDir = 'public/fonts/';

const sourceCss = 'resources/assets/css/';
const sourceJs = 'resources/assets/js/';

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.js('resources/assets/js/guest.js', 'public/js');
mix.copy(sourceCss + 'guest', 'public/css/guest', false);
mix.copy(sourceVendor + 'guest', publicVendor + 'guest', false);
mix.copy(sourceJs + 'guest/theme','public/js/guest/theme', false);
