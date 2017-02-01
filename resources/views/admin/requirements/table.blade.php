
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
          <tr data-id='{{ $requirement->id }}'>
            <td>{{ $requirement->id }}</td>
            <td>{{ $requirement->description }}</td>
            <td><a href="{{route('requirement.assignfun',$requirement->id)}}" class="waves-effect waves-light btn"> <i class="material-icons">done</i></a></td>
            <td><button class="waves-effect waves-light "  data-target="modal1" id="btn_delete">Modal</button></td>
          </tr>
        @endforeach
      </tbody>

</table>

<script type="text/javascript">
</script>
