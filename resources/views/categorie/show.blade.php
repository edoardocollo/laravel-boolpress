@extends('layout.layout')
@section('titolo_head')
  show_articoli crud
@endsection
@section('titolo')
  show_articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('categorie.partials.show_category')
@endsection
@section('scripts')
@endsection
