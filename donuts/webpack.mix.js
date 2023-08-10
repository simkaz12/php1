

let mix = require('laravel-mix');

mix.sass('resourses/sass/app.scss', 'public')
    .js('resourses/js/app.js', 'public');