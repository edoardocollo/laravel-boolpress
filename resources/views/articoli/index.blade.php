@extends('layout.layout')
@section('titolo_head')
  articoli crud
@endsection
@section('titolo')
  articoli crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('articoli.partials.print_articles')
@endsection
@section('scripts')
@endsection
