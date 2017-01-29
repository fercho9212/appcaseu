<table id='tbl_func' class="striped">
   <thead>
    <tr>
      <th>Description</th>
      <th>Accion</th>
    </tr>
  </thead>

<tbody id='rest_func'>

    @foreach ($funcionalities as $key)
      <tr>
      <td>{{$key->description}}</td>
      <td>{{$key->id}}</td>
      </tr>
    @endforeach


</tbody>




</table>
