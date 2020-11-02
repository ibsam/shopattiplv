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

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/jquery.countdown.min.js','public/js')
	.js('resources/js/jquery.dd.min.js','public/js')
	.js('resources/js/jquery.elevatezoom.js','public/js')
	.js('resources/js/light-slider.js','public/js')
	.js('resources/js/magnific-popup.min.js','public/js')
	.js('resources/js/owl.carousel.min.js','public/js')
	.js('resources/js/parallax.js','public/js')
	.js('resources/js/theme-script.js','public/js')
	.js('resources/js/validator.js','public/js')
	.js('resources/js/popper.min.js','public/js')
	.js('resources/js/wow.js','public/js')
    .sass('resources/sass/app.scss', 'public/css');


