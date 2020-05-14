<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>

  <header class="header">
    @yield('header')
  </header>

  @yield('content')
</body>

<footer class="footer">
  @yield('footer')
</footer>

</html>
