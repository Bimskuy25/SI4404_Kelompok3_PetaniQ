<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard FoodHub</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/dashboardstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href=".frontend/css/dashboardstyle.css" rel="stylesheet">
  </head>
  <body class="sb-nav-fixed">

    @include('dashboard.layouts.header')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Controlling</div>
                            <a class="nav-link {{ Request::is('dashboard/user*') ? 'active': '' }}" href="/dashboard/user">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Users
                            </a>
                            <a class="nav-link {{ Request::is('dashboard/modalin*') ? 'active': '' }}" href="/dashboard/modalin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Modalin
                            </a>
                            <a class="nav-link {{ Request::is('dashboard/modalin*') ? 'active': '' }}" href="/dashboard/product">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Produk
                            </a>
                            <a class="nav-link {{ Request::is('dashboard/transaksi*') ? 'active': '' }}" href="/dashboard/transaksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Transaksi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin PetaniQ
                    </div>
                </nav>
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
            </main>
        </div>
        
    </div>
    </div>

    <script src="/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  </body>
</html>
