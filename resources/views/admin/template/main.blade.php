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
   <header >
     @include('admin.template.components.nav')
   </header>
    @include('admin.template.components.sideNav')
<main>
    <div class="container">
        <div class="col s12 m8 l10">
          @include('admin.template.components.message')          <!--MENSAGGE SEND FOR LARAVEL-->
          @include('admin.template.components.message_ajax')     <!--MENSAGGE SEND FOR AJAX-->

          @yield('content')
        </div>
    </div>

<main>


    {{Html::script('plugins/jquery/js/jquery.js')}}
    {{Html::script('plugins/materialize/js/materialize.js')}}
    {{Html::script('js/scripts-materialize.js')}}
    @yield('scripts')
  </body>
</html>
