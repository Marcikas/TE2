const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'resources/landing/lib/jquery/dist/jquery.js',
    'resources/landing/lib/bootstrap/dist/js/bootstrap.min.js',
    'resources/landing/lib/wow/dist/wow.js',
    'resources/landing/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js',
    'resources/landing/lib/isotope/dist/isotope.pkgd.js',
    'resources/landing/lib/imagesloaded/imagesloaded.pkgd.js',
    'resources/landing/lib/flexslider/jquery.flexslider.js',
    'resources/landing/lib/owl.carousel/dist/owl.carousel.min.js',
    'resources/landing/lib/smoothscroll.js',
    'resources/landing/lib/magnific-popup/dist/jquery.magnific-popup.js',
    'resources/landing/lib/simple-text-rotator/jquery.simple-text-rotator.min.js',
    'resources/landing/js/main.js',
    'resources/landing/js/plugins.js',
], 'public/js/landing.js');    

mix.styles([
    'resources/landing/lib/bootstrap/dist/css/bootstrap.min.css',     
    'resources/landing/lib/animate.css/animate.css',     
    'resources/landing/lib/components-font-awesome/css/font-awesome.min.css',     
    'resources/landing/lib/et-line-font/et-line-font.css',     
    'resources/landing/lib/flexslider/flexslider.css',     
    'resources/landing/lib/owl.carousel/dist/assets/owl.carousel.min.css',     
    'resources/landing/lib/owl.carousel/dist/assets/owl.theme.default.min.css',     
    'resources/landing/lib/magnific-popup/dist/magnific-popup.css',     
    'resources/landing/lib/simple-text-rotator/simpletextrotator.css',     
    'resources/landing/css/style.css'
], 'public/css/landing.css'); 