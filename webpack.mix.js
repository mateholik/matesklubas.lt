const mix = require('laravel-mix');

mix.js('assets/javascript/main.js', 'assets/compiled/js').vue()
mix.js('assets/javascript/introduction/main.js', 'assets/compiled/js/introduction').vue()

mix.sass('assets/sass/style.scss', 'assets/compiled/css')
    .options({
        processCssUrls: false
    })
mix.sass('assets/sass/introduction/style.scss', 'assets/compiled/css/introduction')
    .options({
        processCssUrls: false
    })