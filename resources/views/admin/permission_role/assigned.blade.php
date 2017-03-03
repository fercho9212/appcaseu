{{ Form::open(array('method'=> 'post', 'route' => array('permissions.store'))) }}

@foreach ($permissions as $permision)
  <?php $var=true; ?>
   @foreach ($assigned as $assigneds)
     @foreach ($assigneds as $key)
       @if ($permision==$key)
               <?php $var=false; ?>
       @endif
     @endforeach
   @endforeach
   @if ($var==false)
     <p>
         
         {!! Form::checkbox('permision[]',$permision->id, true,['id'=>'test'.$permision->id]) !!}
      <label  for="test{{ $permision->id}}" >{{ $permision->name  }}</label>
    </p>
     @else
       <p>

      {!! Form::checkbox('permision[]',$permision->id, false,['id'=>'test'.$permision->id]) !!}

       <label for="test{{ $permision->id}}" >{{ $permision->name  }}</label>
     </p>
   @endif
@endforeach
<input type="hidden" name="rol_id" value="{{$rol_id}}">
{{ Form::submit('Crear', array('class'=> 'waves-light btn')) }}
{{ Form::close() }}
