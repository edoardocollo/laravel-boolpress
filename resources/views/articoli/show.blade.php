@extends('layout.layout')
@section('titolo_head')
  show_articoli crud
@endsection
@section('titolo')
  show_articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('articoli.partials.show_article')
@endsection
@section('scripts')
@endsection
