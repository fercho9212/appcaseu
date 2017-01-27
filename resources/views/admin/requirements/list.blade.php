@extends('admin.template.main')
@section('content')
  <div class="list-requirement">

  </div>
  <table id="table_id" class="display bordered">
        <thead>
          <tr>
              <th data-field="id">Nrerame</th>
              <th data-field="name">Correo</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($requirements as $requirement)
            <tr>
              <td>{{ $requirement->id }}</td>
              <td>{{ $requirement->description }}</td>
            </tr>
          @endforeach
        </tbody>

    </table>
@endsection
