{!! Form::open(['route'=>'role_permission.store','id'=>'permi-rol']) !!}
<table class="table table-striped">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Route</th>
            @foreach($roles as $role)
                <th class="text-center">{{ $role->display_name }}</th>
            @endforeach
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th colspan="{{ count($roles) }}">&nbsp;</th>
        </tr>
        </thead>
        <tbody>

        @foreach($permissions as $permission)
            <tr>
                <td id="{{$permission->id}}" width="150">{{ $permission->display_name }}</td>
                <td><small class="label label-info">{{ $permission->route }}</small></td>
                @foreach ($roles as $role)
                    <td width="150" class="text-center">
                        @if ($permission->hasRole($role->name) && $role->name == 'admin')
                            <input id="{{$permission->id}}{{$role->id}}" type="checkbox" checked name="roles[{{ $role->id}}][permissions][]" value="{{ $permission->id }}" disabled>
                            <label for="{{$permission->id}}{{$role->id}}">es admin</label>
                            <input  type="hidden" name="roles[{{$role->id}}][permissions][]" value="{{ $permission->id }}">
                        @elseif($permission->hasRole($role->name))
                            <input  id="{{$permission->id}}{{$role->id}}" type="checkbox" checked name="roles[{{ $role->id}}][permissions][]" value="{{ $permission->id }}">
                            <label for="{{$permission->id}}{{$role->id}}">Tiene rol</label>
                        @else
                            <input  id="{{$permission->id}}{{$role->id}}"  type="checkbox" name="roles[{{ $role->id }}][permissions][]" value="{{ $permission->id }}">
                            <label  for="{{$permission->id}}{{$role->id}}">No tiene rol</label>
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
<input type="checkbox" id="test5" />
<label for="test5">Red</label>