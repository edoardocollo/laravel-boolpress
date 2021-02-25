@extends('layout.layout')
@section('titolo_head')
  tags crud
@endsection
@section('titolo')
  tags crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.print_tags')
  @include('layout.nav')

@endsection
@section('scripts')
@endsection
