const mix = require('laravel-mix');

mix.sass('resources/sass/main.scss', 'css/style.css')
    .minify('css/style.css')
    .js('resources/js/app.js', 'js/app.js')
    .autoload({
        jquery: ['$', 'window.jQuery']
     })
     .minify('js/app.js')

