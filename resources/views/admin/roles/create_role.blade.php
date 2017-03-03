@extends('admin.template.main')

  @section('content')
  {{ Form::open(array('method'=> 'post', 'route' => array('roles.store'))) }}
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  name='name' id="first_name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="display_name" name='display_name' type="text" class="validate">
          <label for="last_name">display_name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input  name='description' id="first_name" type="text" class="validate">
          <label for="first_name">Description</label>
        </div>
      </div>
  {{ Form::submit('Crear', array('class'=> ' waves-light btn')) }}
{{ Form::close() }}
  @endsection
