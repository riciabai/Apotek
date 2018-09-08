<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-bottom : 2rem">
<a class="navbar-brand" href="{{url('/')}}">Apotek</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tersembunyi" aria-controls="tersembunyi" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="tersembunyi">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Obat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
            </li>
        </ul>
        @if (!Auth::check())
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('masuk')}}" class="nav-link">Masuk</a></li>
                <li class="nav-item"><a href="{{url('daftar')}}" class="nav-link">Mendaftar</a></li>
            </ul>
        @else
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Halo {{Auth::user()->name}}</a></li>
            <li class="nav-item"><a href="{{ url('logout')}}" class="nav-link">Logout</a></li>
            </ul>
        @endauth
    </div>
  </nav>