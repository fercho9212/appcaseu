{!!Form::open(['route'=>'requirements.store','id'=>'reg_requerimient'])!!}
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea name="description" id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">REQUERIMIENTO PRINCIPAL</label>
            {!!Form::submit('Enviar',['class'=>'waves-effect waves-light btn center center-align'])!!}
          </div>
        </div>
      </div>
    </div>
{!!Form::close()!!}
