@extends('layout.layout')
@section('titolo_head')
  creazione_articoli crud
@endsection
@section('titolo')
  creazione_articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('articoli.partials.create_form')
@endsection
@section('scripts')
@endsection
