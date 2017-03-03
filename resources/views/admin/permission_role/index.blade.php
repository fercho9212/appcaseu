@extends('admin.template.main')

  @section('styles')
    {{Html::style('css/styles-materialize.css')}}
    {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
  @endsection



@section('content')
  <br> <br><br>
  <br> <br><br>
 <h3>Asignar permisos</h3>

 @include('admin.permission_role.assigned')
  

  <h1>Permisos</h1>



  <h3>Asignados</h3>
  @foreach ($assigned as $assigneds)
    @foreach ($assigneds as $permissionsAssigned)
      {{ $permissionsAssigned->name }}
   @endforeach
  @endforeach
 <h3>Todos</h3>
 @foreach ($permissions as $permission)
  {{ $permission->name }}
 @endforeach


@endsection
