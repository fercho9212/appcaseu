  {!!Form::open(['route'=>'functionalities.store','method'=>'POST','id'=>'frm_func'])!!}
  <div class="table-responsive">
    <table class="table table-bordered" id="dinamic_funcionality">
      <tr>

        <td class="">
          <div class="input-field col s12">
            <textarea  id="textarea" name="description[]"  class="materialize-textarea name_list"></textarea>
            <label for="textarea1">Enter the functionalities</label>
          </div>
        </td>
        <td class="col l4">
          <button type="button" name="add" id="add" class="btn btn-success"><i class="large material-icons">done</i></button></td>
        <td>
          <input id="ocult" type="hidden" name="requirement_id" value="{{$requirement->id}}"/></td>

    </tr>
    </table>
    {{Form::submit('done_all',['class'=>'btn material-icons light-blue darken-4','id'=>'save_func'])}}

  </div>
{!!Form::close()!!}
