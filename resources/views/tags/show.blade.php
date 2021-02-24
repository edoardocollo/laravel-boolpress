@extends('layout.layout')
@section('titolo_head')
  create_tags crud
@endsection
@section('titolo')
  create_tags crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.show_tags')
@endsection
@section('scripts')
@endsection
