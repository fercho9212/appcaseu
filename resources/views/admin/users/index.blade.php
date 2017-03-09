@extends('admin.template.main')

  @section('styles')
    {{Html::style('css/styles-materialize.css')}}
    {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
  @endsection


  @role('admin')
      <p>This is visible to users with the admin role. Gets translated to
      \Entrust::role('admin')</p>
  @endrole

    @if(Entrust::can('other'))
      <h2>holaaaaaaaaaaaa si tiene permiso</h2>
    @endif

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
