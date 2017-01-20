@extends('admin.template.main')
@section('content')
  <h3 class="center">Objetivodd</h3>
  <h2 class="center">

    @if (session()->has('flash_notification.message'))
        @if (session('flash_notification.level')=='danger')
        
        @elseif ($condition)

        @endif
        <div class="alert alert-{{ session('flash_notification.level') }}">
            {!! session('flash_notification.message') !!}
        </div>
        <h3>{{ 'este es '.session('flash_notification.level') }}</h3>
    @endif
    <div class="card-content green-text">
      <p>dasdasd :das asd </p>
    </div>
  </h2>
  {{'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'}}
<br/>
<br/>
<br/>
<div id="card-alert" class="card green lighten-5">
                      <div class="card-content green-text">
                        <p>SUCCESS : The page has been added.</p>
                      </div>

                    </div>

  @include('admin.requirements.form')
@endsection
