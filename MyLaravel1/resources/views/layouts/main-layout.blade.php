<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Object Oriented Programming</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>

    @include('components.header')
    @yield('homeSection')
    @include('components.footer')

  </body>
</html>
