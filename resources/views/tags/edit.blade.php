@extends('layout.layout')
@section('titolo_head')
  edit_tag crud
@endsection
@section('titolo')
  edit_tag crud
@endsection
@section('main_content')
  @include('layout.nav')
  @include('tags.partials.edit_tag')
@endsection
@section('scripts')
@endsection
