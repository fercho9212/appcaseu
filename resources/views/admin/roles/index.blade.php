@extends('admin.template.main')

  @section('styles')
    {{Html::style('css/styles-materialize.css')}}
    {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
  @endsection



@section('content')
  <br> <br><br>
  <h1>Roles</h1>
  {{ Form::open(array('method'
                    => 'get', 'route' => array('roles.create'))) }}
                    {{ Form::submit('Crear', array('class'
                => ' waves-light btn')) }}
                {{ Form::close() }}


  @include('admin.roles.table_roles')
@endsection
