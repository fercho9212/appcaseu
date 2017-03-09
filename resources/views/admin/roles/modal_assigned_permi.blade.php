<div id="mod_asig_requi" class="modal modal-fixed-footer">

<form id="form_assign">

  <div class="modal-content">

    <h4 class="modal-title">Gestionar permisos</h4>
    <div class="modal-body">
    <select id="my-select" multiple="multiple">
          @if(isset($permissions))
              @foreach ($permissions as $permision)
                  <option name="[]" value="{{$permision->id}}" >{{ $permision->name }}</option>
              @endforeach
          @endif
      </select>
  </div>
  </div>





    <div class="modal-footer">
      <button href="admin/requirements/" id="btn_cofr_update" class="modal-action modal-close waves-effect waves-green btn-flat ">Acualizar</button>
    </div>
</form>


</div>
