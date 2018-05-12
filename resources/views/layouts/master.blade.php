<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CINETI - Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ URL::asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Toastr -->
    <link href="{{ URL::asset('css/toastr.min.css') }}" rel="stylesheet"/>
    <!-- style CINETI -->
    <link href="{{ URL::asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html">
        <strong>CINETI</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- MENU -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Salas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Filmes</a>
          </li>
          @auth          
            @if(Auth::user()->tipo == 2)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin/filmes">Cadastrar filme</a>
                  <a class="dropdown-item" href="#">Cadastrar sala</a>
                  <a class="dropdown-item" href="#">Cadastrar horário</a>
                  <a class="dropdown-item" href="#">Cadastrar sessão</a>
                </div>
              </li>
            @endif
          @endauth
        </ul>

        <!-- MINHA CONTA -->
        <ul class="navbar-nav nav-flex-icons">          
          <li class="nav-item">
          @auth
          <div class="nav-link">
              <i class="fa fa-user mr-2"></i>Olá, {{Auth::user()->nome}} | <span style="cursor:pointer" onClick="(function(){window.location.href = 'logout';})();"><i class="fa fa-sign-out"></i></span>
          </div>
          @endauth
          @guest
            <a href="login" class="nav-link border border-light rounded">
                <i class="fa fa-user mr-2"></i>MINHA CONTA
            </a>
          @endguest            
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  
  @yield('content')

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
        <img src="{{ URL::asset('img/formas-pagamento.png') }}" width="300" alt="Formas de pagamento">
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="#"> CINETI </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="{{ URL::asset('js/toastr.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();


    @if (session('message'))

    (function () {
      toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "4000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
      }

      toastr["{{session('type')}}"]("{{session('message')}}","{{session('title')}}");

    })();
    @endif
    
  </script>
  @yield('script')
</body>

</html>
