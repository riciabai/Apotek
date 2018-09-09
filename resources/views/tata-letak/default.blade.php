@extends('tata-letak.admin')

@section('content')
    <br>
            <h2>@yield('title')</h2>
    <hr>
    <div class="row">
        <div class="col-5">
                <div class="card">
                        <div class="card-body">
                                @yield('form')
                                @include('bagian.error')
                            
                      </div>
                  </div>
          </div>
          <div class="col-7">
              <div class="table-responsive">
                  <table class="table table-striped">
                      @yield('tabel')
                  </table>
              </div>
          </div>
      </div>
  <hr>
              
@endsection