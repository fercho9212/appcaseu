<table  class="display bordered">

      <thead>
        <tr>
            <th >No</th>
            <th>Description</th>
            <th>Asignar Funcionalidad</th>
            <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($roles as $role)
          <tr data-id='{{ $role->id }}' id='{{ $role->id }}' >
            <td>{{ $requirement->id }}</td>
            <td data-description=''>{{$requirement->name  }}</td>
            <td><a href="{{route('requirement.assignfun',$requirement->id)}}" class="waves-effect waves-light btn"> <i class="material-icons">done</i></a></td>
            <td>
              <button class="btn waves-light red"  data-target="modal1" id="btn_delete"><i class="material-icons">delete_forever</i></button>
              <button class="btn waves-light black"  data-id='{{ $requirement->id }}' data-target="mod_upd_req" id="btn_upd_req"><i class="material-icons">mode_edit</i></button>
            </td>
          </tr>
        @endforeach
      </tbody>

</table>
