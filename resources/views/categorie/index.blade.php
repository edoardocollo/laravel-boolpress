@extends('layout.layout')
@section('titolo_head')
  categorie crud
@endsection
@section('titolo')
  categorie crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('categorie.partials.print_categories')
@endsection
@section('scripts')
@endsection