<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>@yield('title','this is a title')</title>
    {{Html::style('plugins/materialize/css/materialize.css')}}
    {{Html::style('plugins/materialize/css/material-icons.css')}}
    @yield('styles')
  </head>

  <body>
   <header class="teal darken-1">
     @include('admin.template.components.nav')
   </header>
    <div class="container">
        <div class="col s12 m8 l10">
          @yield('content')
        </div>

    </div>



    @yield('scripts')
    {{Html::script('plugins/jquery/js/jquery.js')}}
    {{Html::script('plugins/materialize/js/materialize.js')}}
    {{Html::script('js/scripts-materialize.js')}}

  </body>
</html>
