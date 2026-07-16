<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('styles')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <style>
        html {
            scroll-behavior: smooth; /* biar scroll halus */
            scroll-padding-top: 70px; /* biar ga ketutup navbar */
        }

        section {
            height: 100vh; /* full layar */
            padding: 50px;
        }
        #footer {
            min-height: auto;
        }
        body {
            margin: 0;
            padding: 0;
            background: #000;
            min-height: 100%;
            overflow-x: hidden;
        }

    </style>
  </head>


  <body>

    @include('pages.layout.navbar')

    
    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- PINDAHKAN KE SINI --}}
    @stack('scripts')

  </body>
</html>