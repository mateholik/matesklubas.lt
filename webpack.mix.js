const mix = require('laravel-mix');

mix.js('assets/javascript/main.js', 'dist');

mix.js('assets/javascript/product.js', 'dist');

mix.sass('assets/sass/style.scss', 'dist').options({
  processCssUrls: false,
});
// mix.sass("assets/sass/homepage/style.scss", "assets/compiled/css/homepage");
