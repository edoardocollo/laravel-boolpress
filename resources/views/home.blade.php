@extends('layout.layout')
@section('titolo_head')
  home
@endsection
@section('titolo')
  home
@endsection
@section('main_content')
  @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/logout') }}">logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
  @endif

  @include('layout.nav')
  @include('layout.api_nav')
@endsection
