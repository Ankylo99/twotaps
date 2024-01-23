<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-df5xTf0DqNzDC3pxdojDc2z6FzEInDMQ8EnH56TwhdFYvXxQRZ/46K53uMGf3RNa" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    @yield('styles')

    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">


</head>

<body>
    @include('layouts._partials.mesages')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ asset('img/aaa.png') }}" alt="Two Taps Logo" width="80px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="item item nav-link letra" aria-current="page" href="#">Competiciones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="item nav-link dropdown-toggle  letra" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Coach
                        </a>
                        <ul class="item dropdown-menu">
                            <li><a class="item dropdown-item letra" href="#">Scrims</a></li>
                            <li><a class="item dropdown-item letra" href="#">Contenido</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="item dropdown-item letra" href="#">SOLOQ</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn item btn-white letra" type="submit">Log in</button>
                    <button class="btn item btn-white letra" type="submit" style="margin-left: 5px">Sign in</button>
                </form>
            </div>
        </div>
    </nav>



    @yield('content')









    
<footer class="container my-5">

    <footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
      <section class="mb-4">

  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/TwTsEsp" role="button"><i class="fab fa-twitter"></i></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-discord"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:

    </div>
    <!-- Copyright -->
  </footer>
    
  </div>
  <!-- End of .container -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

@yield('scripts')

</html>
