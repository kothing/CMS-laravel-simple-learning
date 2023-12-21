<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>MicroCMS dashboard - @yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.6.1/css/font-awesome.min.css" />

    <!-- Prism -->
    <link rel="stylesheet" href="https://unpkg.com/prismjs@1.6.0/themes/prism.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
  </head>

    <body>
      @yield('header')
      @yield('navbar')
      @yield('content')
    </body>

</html>
