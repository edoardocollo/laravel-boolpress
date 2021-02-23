@extends('layout.layout')
@section('titolo_head')
  spa
@endsection
@section('titolo')
  spa
@endsection
@section('main_content')
  @include('layout.nav')
  <div id="app">
    <h2>ARTICOLI</h2>
    <articles></articles>
    <h2>CATEGORIE</h2>
    <categories></categories>
    <h2>tags</h2>
    <tags></tags>
  </div>

@endsection
@section('scripts')
  <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
@endsection
