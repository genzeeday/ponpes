<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PONPES DARUL YATAMA WAL MASAKIN</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="/images/logo_transparan.png">
  @vite('resources/css/app.css')
  @yield('custom-head')
</head>
<body>
    @include('includes.header')
    @yield('content')
    @yield('custom-script')
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>