<!-- Modal Structure -->
<div id="mod_upd_req" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Update Functionality</h4>
    {!!Form::open(['id'=>'form_upd_requi'])!!}
    <input type="hidden" id="token" value="{{ csrf_token() }}">
    <input type="hidden" id='id_'>
    <textarea name="description" id="description" class="materialize-textarea"></textarea>
    <label for="textarea1">Functionalilty</label>

  </div>
  <div class="modal-footer">
    <button href="admin/requirements/" id="btn_cofr_update" class="modal-action modal-close waves-effect waves-green btn-flat ">Acualizar</button>
  </div>
  {!!Form::close()!!}
</div>
