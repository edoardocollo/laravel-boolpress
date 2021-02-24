@extends('layout.layout')
@section('titolo_head')
  create_tag crud
@endsection
@section('titolo')
  create_tag crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.show_tag')
@endsection
@section('scripts')
@endsection
