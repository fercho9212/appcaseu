<table  class="display bordered">
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
