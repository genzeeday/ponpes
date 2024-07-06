<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pondok Pesantren</title>
  @vite('resources/css/app.css')
  @yield('custom-head')
</head>
<body>
    @include('includes.header')
    @yield('content')
    @yield('custom-script')
    @include('includes.footer')
</body>
</html>