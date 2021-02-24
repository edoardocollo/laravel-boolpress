@extends('layout.layout')
@section('titolo_head')
  create_categorie crud
@endsection
@section('titolo')
  create_categorie crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.create_form')
@endsection
@section('scripts')
@endsection
