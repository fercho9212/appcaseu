@extends('admin.template.main')

  @section('styles')
    {{Html::style('css/styles-materialize.css')}}
    {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
  @endsection



@section('content')
  <br> <br><br>
  <h1>Usuarioss</h1>

  {{ Form::open(array('method'
                    => 'get', 'route' => array('users.create'))) }}
                    {{ Form::submit('Crear', array('class'
                => ' waves-light btn')) }}
                {{ Form::close() }}


  @include('admin.users.table_users')
@endsection
