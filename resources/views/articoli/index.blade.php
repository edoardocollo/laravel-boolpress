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

    @include('layout.api_nav')

@endsection
@section('scripts')
@endsection
