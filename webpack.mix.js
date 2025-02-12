const mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
])
.sass('resources/scss/bootstrap.scss', 'public/css') // Optionnel si tu veux compiler Bootstrap en SCSS
.version();
