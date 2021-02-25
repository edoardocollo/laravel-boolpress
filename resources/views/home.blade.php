@extends('layout.layout')
@section('titolo_head')
  home
@endsection
@section('titolo')
  home
@endsection
@section('main_content')
  @if (Route::has('login'))
    <div >
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
  <div id="fabius-bile">
    <img src="http://www.coolminiornot.com/pics/pics16/img5f00d85302b81.jpg" alt="">
  </div>
  @include('layout.api_nav')
@endsection
