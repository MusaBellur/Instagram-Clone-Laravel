let mix = require('laravel-mix');

mix.js('./resources/js/app.js', 'public/js')
   .sass('./resources/sass/app.scss', 'public/css')  // ./ eklenmiş şekilde deneyin
   .vue()
   .setPublicPath('public')
   .browserSync('http://127.0.0.1:8000')
   .webpackConfig({
      resolve: {
         extensions: [".*",".wasm",".mjs",".js",".jsx",".json",".vue",".scss"]
      }
   });
