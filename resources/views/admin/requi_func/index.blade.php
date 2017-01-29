@extends('admin.template.main')
@section('styles')
  {{Html::style('css/styles-materialize.css')}}
  {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
@endsection
@section('content')
    <div class="row">
      <center>{{$requirement->description}}</center>
      <div class="col l6 m7 s12">
        <div class="card  darken-4">
          <div class="">
            <span class="card-title center"><h5 class="center-align black-text">Register of functionalities</h5></span>

          </div>

          <p>
            @include('admin.requi_func.add_form')
          </p>
        </div>

      </div>
      <div class="col l6 m5 s12">

        <div class="card  darken-4">
          <div class="">

            <span class="card-title "><h5 class="center-align black-text ">Functionalities registers</h5></span>
          </div>
          @include('admin.requi_func.table_funcionalities')
        </div>
    </div>
    </div>
@endsection
@section('scripts')
  {{Html::script('js/ajax.js')}}
@endsection
