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



mix.styles([
    'public/website/css/nice-select.css',
    'public/website/css/jquery.fancybox.css',
    'public/website/css/jquery-ui.min.css',
    'public/website/css/meanmenu.min.css',

    'public/website/css/nivo-slider.css',
    'public/website/css/owl.carousel.min.css',
    // 'public/website/css/bootstrap.min.css',
    // 'public/website/css/bb.css',
    'public/website/css/default.css',
    'public/website/css/style.css',


    'public/website/css/past-color.css',
    'public/website/css/responsive.css',
    'public/website/cu/style.css',
    'public/website/css/style01.css',
    'public/website/notify/css/notifIt.css',

], 'public/css/public.css')

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
