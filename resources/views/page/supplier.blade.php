@extends('tata-letak.default')

@section('title')
    Supplier
@endsection

@section('form')
<form method="POST" action="supplier">
        @csrf
        <div class="form-group">
          <label for="nama" class="label">Nama Supplier</label>
          <input type="text" class="form-control" name="nama" id="nama" value="{{old('username')}}" required>
        </div>
        <div class="form-group">
          <label for="alamat" class="label">Alamat Supplier</label>
          <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-success">OKE</button>
            </div>
        </form>
@endsection

@section('tabel')
    <tr>
        <th>Nama Supplier</th>
        <th>Alamat Supplier</th>
    </tr>
@endsection