const elixir = require('laravel-elixir');
const sourceVendor = 'resources/assets/vendor/';
const publicVendor = 'public/vendor/';
const fontDir = 'public/fonts/';

const source = 'resources/assets/';
const publicUser = 'public/user/'

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
   	mix.copy(
      sourceVendor + 'sweetalert/dist/sweetalert.css',
      publicVendor + 'sweetalert/sweetalert.css'
  	);
  	mix.copy(
      sourceVendor + 'sweetalert/dist/sweetalert.min.js',
      publicVendor + 'sweetalert/sweetalert.min.js'
	  );
    mix.copy(
      source + 'css/user',
      publicUser + 'css'
    );
    mix.copy(
      source + 'js/user',
      publicUser + 'js'
    );
    mix.copy(
      sourceVendor + 'user',
      publicUser + 'vendor'
    );
    mix.webpack(source + 'js/user.js', publicUser + 'js/user.js');
});
