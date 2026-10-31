<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth; /* biar scroll halus */
            scroll-padding-top: 70px; /* biar ga ketutup navbar */
            overflow-x: hidden;
            width: 100%;
        }

        section {
            position: relative;
            height: auto;
        }
        #footer {
            min-height: auto;
        }
        body {
            margin: 0;
            padding: 0;
            background: #040406 !important;
            background-color: #040406 !important;
            color: #fff !important;
            min-height: 100%;
            overflow-x: hidden;
            width: 100%;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>

    @stack('styles')
  </head>


  <body>

    @include('pages.layout.navbar')

    
    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- PINDAHKAN KE SINI --}}
    @stack('scripts')

  </body>
</html>