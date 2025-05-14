<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UBeasiswa</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            .carousel-track {
              display: flex;
              transition: transform 0.5s ease-in-out;
            }
            .carousel-slide {
              flex-shrink: 0;
              width: 100%;
            }
          </style>

        <!-- Styles / Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        @include('components.navbar')

        @yield('content')

        @include('components.footer')
    </body>
</html>
