const mix = require('laravel-mix');

// Konfigurasi mix
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version()
   .webpackConfig({
       devServer: {
           hot: true,
           host: 'localhost',
           port: 8080,
           proxy: {
               '*': 'http://localhost:8000'
           },
           watchOptions: {
               poll: true // jika perlu, atur polling untuk memantau perubahan
           }
       }
   });
