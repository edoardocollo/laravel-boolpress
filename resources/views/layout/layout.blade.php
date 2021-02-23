<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titolo_head')</title>
  </head>
  <body>
    <h1>@yield('titolo')</h1>
    @yield('main_content')


    <footer>
      @yield('footer')
    </footer>
  </body>
</html>
