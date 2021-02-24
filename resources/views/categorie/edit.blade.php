@extends('layout.layout')
@section('titolo_head')
  edit_articoli crud
@endsection
@section('titolo')
  edit_articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('categorie.partials.edit_category')
@endsection
@section('scripts')
@endsection
