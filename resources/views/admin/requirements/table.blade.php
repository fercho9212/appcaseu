<table id="tbl_requerimient" class="display bordered">
      <thead>
        <tr>
            <th >No</th>
            <th>Description</th>
            <th>Asignar Funcionalidad</th>
            <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($requirements as $requirement)
          <tr>
            <td>{{ $requirement->id }}</td>
            <td>{{ $requirement->description }}</td>
            <td><a href="{{route('requirement.assignfun',$requirement->id)}}" class="waves-effect waves-light btn"> <i class="material-icons">done</i></a></td>
            <td></td>
          </tr>
        @endforeach
      </tbody>

  </table>
