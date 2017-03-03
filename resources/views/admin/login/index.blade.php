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

   </header>
   <style type="text/css">
   html,
   body {
       height: 100%;
   }
   html {
       display: table;
       margin: auto;
   }
   body {
       display: table-cell;
       vertical-align: middle;
   }
   #login-page{
     width: 386px !important;
   }
   .margin {
     margin: 0 !important;
   }
   </style>

   </head>

   <body class="#004d40 teal darken-4">


     <div id="login-page" class="row">
       <div class="col s12 card-panel">
         {!!Form::open(['route'=>'log.store','method'=>'POST']) !!}
           <div class="row">
             <div class="input-field col s12 center">
               <img src="http://www.caseu.ub.edu/images/logo.gif" alt="" class="responsive-img valign profile-image-login">
               <p class="center login-form-text">W3lessons  Form</p>
             </div>
           </div>
           <div class="row margin">
             <div class="input-field col s12">
               <i class="material-icons">mail</i>
               <input class="validate" name="mail" id="email" type="email">
               <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
             </div>
           </div>
           <div class="row margin">
             <div class="input-field col s12">
               <i class="material-icons">perm_identitys</i>
               <i class="mdi-action-lock-outline prefix"></i>
               <input id="password" name="password" type="password">
               <label for="password">Password</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s12 m12 l12  login-text">
                 <!--<input type="checkbox" id="remember-me" />
                 <label for="remember-me">Remember me</label>-->
             </div>
           </div>
           <div class="row">
             <div class="input-field col s12">
               {!!Form::submit('Login',['class'=>'btn waves-effect waves-light col s12'])!!}
             </div>
           </div>
           <div class="row">
             <div class="input-field col s6 m6 l6">
              <!-- <p class="margin medium-small"><a href="register.html">Register Now!</a></p>  -->
             </div>
             <div class="input-field col s6 m6 l6">
                 <!--<p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>-->
             </div>
           </div>

         {!!Form::close()!!}
       </div>
     </div>


     <center>




    {{Html::script('plugins/jquery/js/jquery.js')}}
    {{Html::script('plugins/materialize/js/materialize.js')}}
    {{Html::script('js/scripts-materialize.js')}}
    @yield('scripts')
  </body>
</html>
