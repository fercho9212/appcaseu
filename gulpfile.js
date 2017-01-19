const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
  mix.styles([
    './node_modules/material-design-icons/iconfont/material-icons.css'
  ],'public/plugins/materialize/css/materialize-icons.css');

    mix.styles([
      './node_modules/materialize-css/dist/css/materialize.css'
    ],'public/plugins/materialize/css/materialize.css');

    mix.scripts([
      './node_modules/materialize-css/dist/js/materialize.js'
    ],'public/plugins/materialize/js/materialize.js');

    mix.scripts([
      './node_modules/jquery/dist/jquery.js'
    ],'public/plugins/jquery/js/jquery.js');

});
