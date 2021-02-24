@extends('layout.layout')
@section('titolo_head')
  edit_articoli crud
@endsection
@section('titolo')
  edit_articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('articoli.partials.edit_article')
@endsection
@section('scripts')
@endsection
