let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist/');
mix.sass('resources/scss/app.scss', 'dist/')
   .webpackConfig({
      module: {
        noParse: [
           /node_modules[\\/]videos\.js/
        ]
      }
   });
