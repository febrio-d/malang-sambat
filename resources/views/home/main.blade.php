<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Sambat Malang | {{ $title }}</title>
  </head>
  <body>
        @include('home.navbar')

      <div class="container mt-4">
        @yield('container')
      </div>

    <!-- JavaScript -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>