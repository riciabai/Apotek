@extends('tata-letak.master')

@section('content')
<div class="row">
  <div class="col-5">
<div class="card">
        <div class="card-body">
          <h5 class="card-title">Silahkan masuk bos!</h5>
          <form method="POST" action="masuk">
              @csrf
              <div class="form-group">
                <label for="name" class="label">Username</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('username')}}" required>
              </div>
              <div class="form-group">
                <label for="password" class="label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success">Masuk Pak Eko!</button>
              </div>
              @include('bagian.error')
          </form>
        </div>
      </div>
      </div>
      <div class="col-7">
        <div class="jumbotron bg-success">
          <div class="container">
            <h3 class="display-4">
              Mat Datang Lagi BOSQ
            </h3>
          </div>
        </div>
      </div>
</div>
@endsection