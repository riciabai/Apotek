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
        @isset($success)    
        <div class="alert alert-success">
            {{$success}}
        </div>
        @endisset
@endsection

@section('tabel')
    <tr>
        <th>Nama Supplier</th>
        <th>Alamat Supplier</th>
        <th colspan="2" class="text-center">Opsi</th>
    </tr>
    @foreach ($data as $supplier)
        <tr>
        <td>{{$supplier->nama}}</td>
        <td>{{$supplier->alamat}}</td>
        <td><a 
            href="supplier/edit/{{$supplier->id}}"
            class="btn btn-block btn-outline-primary">
            Edit
            </a>
        </td>
        <td><a 
            href="supplier/hapus/{{$supplier->id}}"
            class="btn btn-block btn-outline-danger"
            >Hapus</a>
        </td>
        </tr>
    @endforeach
@endsection