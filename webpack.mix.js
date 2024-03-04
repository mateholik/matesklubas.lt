const mix = require("laravel-mix");

mix.js("assets/javascript/main.js", "assets/compiled/js");

mix.js("assets/javascript/product.js", "assets/compiled/js");

mix.sass("assets/sass/style.scss", "assets/compiled/css").options({
  processCssUrls: false,
});
// mix.sass("assets/sass/homepage/style.scss", "assets/compiled/css/homepage");
