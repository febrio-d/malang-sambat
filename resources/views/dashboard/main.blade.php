<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Malang Sambat | {{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Malang Sambat</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/adminsignout" method="post">
                    @csrf
                    <button type="submit" class="bg-dark border-0 nav-link px-3">Sign Out</button>
                </form>
            </div>
        </div>
    </header>

    @include('dashboard.sidebar')

    <div class="container-fluid">
        @yield('container')
    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
