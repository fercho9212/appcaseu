  {!!Form::open(['route'=>'functionalities.store','method'=>'POST'])!!}
  <div class="table-responsive">
    <table class="table table-bordered" id="dinamic_funcionality">
      <tr>

        <td><input type="text" name="description[]" placeholder="Enter your functionality" class="form-control name_list" /></td>
        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
        <td><input type="hidden" name="requirement_id" value="{{$requirement->id}}"/></td>
      </tr>
    </table>
    {{Form::submit('SAVE',['class'=>'btn'])}}

  </div>
{!!Form::close()!!}
