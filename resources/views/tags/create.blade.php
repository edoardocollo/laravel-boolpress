@extends('layout.layout')
@section('titolo_head')
  create_tags crud
@endsection
@section('titolo')
  create_tags crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.create_form')
@endsection
@section('scripts')
@endsection
