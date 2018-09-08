@extends('tata-letak.master')

@section('content')
<div class="card">
        <div class="card-body">
          <h5 class="card-title">Ayok daftar bosq!</h5>
          <form method="POST" action="daftar">
              @csrf
              <div class="form-group">
                <label for="username" class="label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}" required>
              </div>
              <div class="form-group">
                <label for="pass" class="label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass">
              </div>
              <div class="form-group">
                <label for="pass_confirmation" class="label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="pass_confirmation" id="pass_confirmation" required>
              </div>
              <div class="form-group">
                <label for="alamat" class="label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" value="{{old('alamat')}}" required></textarea>
              </div>
              <div class="form-group">
                <label class="label">Kelamin</label><br>
                <input type="radio"  name="kelamin" id="kelaminp" value="pria" required>
                <label for="kelaminp">Pria</label><br>
                <input type="radio"  name="kelamin" id="kelaminw" value="wanita" required>
                <label for="kelaminw">Wanita</label>
              </div>
              <div class="form-group">
                <label for="jabatan" class="label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{old('jabatan')}}" required>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success">Masuk Pak Eko!</button>
              </div>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                  <li>{{$errors}}</li>
                </ul>
                </div>
              @endif
          </form>
        </div>
</div>
@endsection