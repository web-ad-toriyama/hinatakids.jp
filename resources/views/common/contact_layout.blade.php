<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_meta_tags['title'] ?? '' }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="{{ $page_meta_tags['description'] ?? '' }}">
    <meta name="keywords" content="{{ $page_meta_tags['keywords'] ?? '' }}">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ url('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ url('images/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" / media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Font Awesome 6 -->
    <script src="https://kit.fontawesome.com/7f2a70e336.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js" defer></script>
    <script src="{{ url('js/script.js') }}" defer></script>
  </head>
  <body id="top">
    <div class="wrapper">
      @yield('main')
    </div>
  </body>
</html>
