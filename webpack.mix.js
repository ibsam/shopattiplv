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
mix.copyDirectory('resources/images','public/images');
mix.copyDirectory('resources/fonts','public/fonts');


mix.js('resources/js/jquery.countdown.min.js','public/js')
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
	.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
	
mix.styles('resources/sass/theme.min.css','public/css/theme.min.css');
mix.styles('resources/sass/animate.css','public/css/animate.css');
mix.styles('resources/sass/line-awesome.min.css','public/css/line-awesome.min.css');
mix.styles('resources/sass/ionicons.min.css','public/css/ionicons.min.css');
mix.styles('resources/sass/owl.carousel.css','public/css/owl.carousel.css');
mix.styles('resources/sass/spacing.css','public/css/spacing.css');
mix.styles('resources/sass/all.min.css','public/css/all.min.css');