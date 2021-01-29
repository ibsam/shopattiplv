const mix = require('laravel-mix');
const exec = require('child_process').exec
require('dotenv').config()


const glob = require('glob')
const path = require('path')


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



mix.js('resources/js/jquery.countdown.min.js','jpublic/js')
	.js('resources/js/jquery.elevatezoom.js','public/js')	
	.js('resources/js/jquery.dd.min.js','public/js')
	.js('resources/js/light-slider.js','public/js')
	.js('resources/js/magnific-popup.min.js','public/js')
	.js('resources/js/owl.carousel.min.js','public/js')
	.js('resources/js/parallax.js','public/js')
	.js('resources/js/theme-script.js','public/js')
	.js('resources/js/validator.js','public/js')
	.js('resources/js/popper.min.js','public/js')
	.js('resources/js/wow.js','public/js')
	.js('resources/js/app.js', 'public/js')
	.js('resources/js/custom.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles('resources/sass/theme.min.css','public/css/theme.min.css');
mix.styles('resources/sass/custom-css.css','public/css/custom-css.css');
mix.styles('resources/sass/theme-plugin.min.css','public/css/theme-plugin.min.css');
mix.styles('resources/sass/animate.css','public/css/animate.css');
mix.styles('resources/sass/line-awesome.min.css','public/css/line-awesome.min.css');
mix.styles('resources/sass/ionicons.min.css','public/css/ionicons.min.css');
mix.styles('resources/sass/owl.carousel.css','public/css/owl.carousel.css');
mix.styles('resources/sass/spacing.css','public/css/spacing.css');
mix.styles('resources/sass/all.min.css','public/css/all.min.css');
// mix.styles('resources/sass/lightslider.min.css','public/css/lightslider.min.css');



//   ################## admin resources #########################################


function mixAssetsDir(query, cb) {
	;(glob.sync('resources/' + query) || []).forEach(f => {
	  f = f.replace(/[\\\/]+/g, '/')
	  cb(f, f.replace('resources', 'public'))
	})
  }
  
  const sassOptions = {
	precision: 5,
	includePaths: ['node_modules', 'resources/assets/']
  }
  
  // plugins Core stylesheets
  mixAssetsDir('sass/base/plugins/**/!(_)*.scss', (src, dest) =>
	mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions)
  )
  
  // pages Core stylesheets
  mixAssetsDir('sass/base/pages/**/!(_)*.scss', (src, dest) =>
	mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions)
  )
  
  // Core stylesheets
  mixAssetsDir('sass/base/core/**/!(_)*.scss', (src, dest) =>
	mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions)
  )
  
  // script js
  mixAssetsDir('js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest))
  
  /*
   |--------------------------------------------------------------------------
   | Application assets
   |--------------------------------------------------------------------------
   */
  
  mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest))
  mixAssetsDir('vendors/css/**/*.css', (src, dest) => mix.copy(src, dest))
  mixAssetsDir('vendors/**/**/images', (src, dest) => mix.copy(src, dest))
  mixAssetsDir('vendors/css/editors/quill/fonts/', (src, dest) => mix.copy(src, dest))
  mixAssetsDir('fonts', (src, dest) => mix.copy(src, dest))
  mixAssetsDir('fonts/**/**/*.css', (src, dest) => mix.copy(src, dest))
  mix.copyDirectory('resources/images', 'public/images')
  mix.copyDirectory('resources/data', 'public/data')
  
  mix
	.js('resources/js/core/app-menu.js', 'public/js/core')
	.js('resources/js/core/app.js', 'public/js/core')
	.sass('resources/sass/core.scss', 'public/css', sassOptions)
	.sass('resources/sass/overrides.scss', 'public/css', sassOptions)
	.sass('resources/sass/base/custom-rtl.scss', 'public/css', sassOptions)
	.sass('resources/assets/scss/style-rtl.scss', 'public/css', sassOptions)
	.sass('resources/assets/scss/style.scss', 'public/css', sassOptions)
  
  mix.then(() => {
	if (process.env.MIX_CONTENT_DIRECTION === 'rtl') {
	  let command = `node ${path.resolve('node_modules/rtlcss/bin/rtlcss.js')} -d -e ".css" ./public/css/ ./public/css/`
	  exec(command, function(err, stdout, stderr) {
		if (err !== null) {
		  console.log(err)
		}
	  })
	}
  })
  
  mix.version()
  