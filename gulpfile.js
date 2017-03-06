var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss')


        .styles([

            'libs/bootstrap.min.css',
            'libs/style.css',
            'flexslider.css',
            'font-awesome.min.css',
            'hippo-off-cavas.css',
            'isotope.css',
            'jquery-ui.css',
            'magnific-popup.css',
            'owl.carousel.css',
            'owl.theme.css',
            'owl.transitions.css',
            'responsive.css',
            'style.css'


        ], './public/css/libs.css')



        .scripts([

            'bootstrap.min.js',
            'hippo-off-cnvas.js',
            'jquery.js',
            'isotope.pkgd.js',
            'jflickrfeed.min.js',
            'jquery.appear.js',
            'jquery.countdown.min.js',
            'jquery.easing.js',
            'jquery.easypiechart.min.js',
            'jquery.flexslider.js',
            'jquery.inview.js',
            'jquery.sticky.js',
            'jquery.magnific-popup.min.js',
            'jquery-ui.js',
            'main.js',
            'menu.js',
            'tweecool.js',
            'owl.carousel.min.js'


        ], './public/js/libs.js')















});
