@extends('admin.template.main')

  @section('styles')
    {{Html::style('css/styles-materialize.css')}}
    {{Html::style('//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css')}}
  @endsection



@section('content')
  @include('admin.requirements.modal_delete')
  <h3 class="center">Main</h3>

    @include('admin.template.components.preloader')
    @include('admin.requirements.form')


      <!--
          <h2 class="center">
        <div class="alert alert-{{ session('flash_notification.level') }}">
            {!! session('flash_notification.message') !!}
        </div>
        <h3>{{ 'este es '.session('flash_notification.level') }}</h3>
      -->
    @include('admin.requirements.table')
    @section('scripts')
    {{Html::script('//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')}}
    {{Html::script('js/table.js')}}
    {{Html::script('js/ajax.js')}}


    @endsection
@endsection
