
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
          <tr data-id='{{ $requirement->id }}' id='{{ $requirement->id }}' >
            <td>{{ $requirement->id }}</td>
            <td>{{ $requirement->description }}</td>
            <td><a href="{{route('requirement.assignfun',$requirement->id)}}" class="waves-effect waves-light btn"> <i class="material-icons">done</i></a></td>
            <td><button class="btn waves-light red"  data-target="delete_requi" id="btn_delete"><i class="material-icons">delete_forever</i></button>
            <button class="btn waves-light black"  data-target="update_requi" id="btn_update_requi"
                    data-id='{{ $requirement->id }}'
                    data-description='{{ $requirement->description }}'>
                    <i class="material-icons">delete_forever</i></button></td>
          </tr>
        @endforeach
      </tbody>

</table>

{!! Form::open(['route'=>['requirements.destroy',':REQUI:ID'],'method'=>'DELETE','id'=>'form_delete'])!!}
{!! Form::close()!!}
