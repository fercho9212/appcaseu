<table  class="display bordered">
  <thead>
    <tr>
      <th>No User</th>
      <th>Email</th>
      <th>Name User</th>
      <th>Rol</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->rol->name}}</td>
          <td>
            <button class="btn waves-light red"  data-target="modal1" id="btn_delete"><i class="material-icons">delete_forever</i></button>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
