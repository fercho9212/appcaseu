<table id="table_permi" class="display bordered">
  <thead>
    <tr>
      <th>No User</th>
      <th>name</th>
      <th>display</th>
      <th>description</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($roles as $rol)
        <tr>
          <td>{{$rol->id}}</td>
          <td>{{$rol->name}}</td>
          <td>{{$rol->display_name}}</td>
          <td>
            <a class="btn waves-light black get-permisos"  rol_id='{{ $rol->id }}' data-target="mod_asig_requi" id="mod_asig_requi"><i class="material-icons">mode_edit</i></a>

          </td>

          <td>
            {{ Form::open(array('method'
                              => 'get', 'route' => array('permissions.role',$rol->id))) }}
                              {{ Form::submit('Permiso', array('class'
                          => ' waves-light btn')) }}
                          {{ Form::close() }}

          </td>
        </tr>
      @endforeach
  </tbody>
</table>
