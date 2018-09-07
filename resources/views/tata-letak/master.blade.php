<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Apotek greget">
    <meta name="author" content="Ahmad Reza">

  <title>{{ env('app.name', 'Apotek')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url ('css/app.css')}}" rel="stylesheet">
  </head>

  <body>

    

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron bg-primary" style="padding : 4rem 0rem ; margin-bottom : 0;">
        <div class="container">
          <h1 class="display-3">Apotek Greget</h1>
          <q>Tempatnya orang sakit jadi makin sakit :P</q>
        </div>
      </div>
      @include('bagian.navigasi')
      <div class="container">

            @yield('content')
        <hr>

    </div> <!-- /container -->
  
    </main>
    @include('bagian.kaki')    
    </body>
  </html>