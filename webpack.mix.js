const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .copy("node_modules/chart.js/dist/chart.min.js", "public/js");
