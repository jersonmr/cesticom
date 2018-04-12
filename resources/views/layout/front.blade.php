<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('style')
</head>
<body>
  @include('layout.partials.header')

  <main id="app" class="main">
    @yield('content')
  </main>

  @include('layout.partials.footer')
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>
</html>