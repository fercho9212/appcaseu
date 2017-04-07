@extends('admin.template.main')
@section('styles')
  {{Html::style('css/styles-materialize.css')}}
  {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
@endsection
  @section('content')
  {{ Form::open(array('method'=> 'post', 'route' => array('users.store'))) }}
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  name='name' id="first_name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name='email' type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="password" name='password'  class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
            <select name='rol'>
              <option value="" disabled selected>Choose Rol</option>
              @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>

              @endforeach
            </select>
            <label>Choose rol FF</label>
        </div>
      </div>




  {{ Form::submit('Crear', array('class'=> ' waves-light btn')) }}
{{ Form::close() }}

  <script type="text/javascript">
  $(document).ready(function(){
     alert('lala');
  })

  </script>

    @endsection
