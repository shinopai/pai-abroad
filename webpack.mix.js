const mix = require("laravel-mix");

mix
  .js("resources/js/app.js", "public/js")
  .vue()
  .js("resources/js/swiper/swiper.js", "public/js/swiper")
  .postCss("resources/css/app.css", "public/css", [
    require("postcss-import"),
    require("tailwindcss"),
    require("autoprefixer"),
  ])
  .sourceMaps()
  .autoload({
    jquery: ["$", "window.jQuery"],
  });
