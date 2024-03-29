
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url ('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Apotek Greget</a>
    <strong style="font-color: white">Selamat Datang {{auth()->user()->name}}</strong>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{url('logout')}}">Keluar</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        @include('bagian.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          @yield('content')
          @include('bagian.kaki')
        </main>
      </div>
    </div>
  </body>
</html>
