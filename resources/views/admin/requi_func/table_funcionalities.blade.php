<table id='tbl_func' class="striped">
   <thead>
    <tr>
      <th>Description</th>
      <th>Accion</th>
    </tr>
  </thead>

<tbody id='rest_func'>
    @foreach ($funcionalities as $key)
      <tr data-id='{{$key->id}}' id='{{$key->id}}'>
        <td>{{$key->description}}</td>
        <td>
          <button class="del btn waves-light red"  data-id='{{$key->id}}' data-target="mod_del_funct" id="btn_del_funct"><i class="material-icons">delete_forever</i></button>
          <button class="btn waves-light black"   data-target="mod_upd_req" id="btn_upd_req"><i class="material-icons">mode_edit</i></button>
        </td>
      </tr>
    @endforeach
 </tbody>
</table>
{!! Form::open(['route'=>['requirements.destroy',':REQUI:ID'],'method'=>'DELETE','id'=>'form_delete'])!!}
{!! Form::close()!!}
