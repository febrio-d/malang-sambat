<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Signin template CSS -->
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">

    <title>Malang Sambat | {{ $title }}</title>
  </head>
  <body>
  	<div class="container mt-4">
      @yield('container')
    </div>

    <!-- JavaScript -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>