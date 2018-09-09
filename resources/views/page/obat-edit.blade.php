@extends('tata-letak.admin')

@section('content')
<br>
<h1>Edit Data</h1>
<hr>
<div class="row">
<div class="col-4">
<div class="card">
    <div class="card-body">
      <form method="POST" action="obat">
        @csrf
        <div class="form-group">
          <label for="nama" class="label">Nama Obat</label>
          <input type="text" class="form-control" name="nama" id="nama"  required>
        </div>
        <div class="form-group">
          <label for="jenis" class="label">Jenis Obat</label>
        <input type="text" class="form-control" name="jenis" id="password" required>
        </div>
        <div class="form-group">
          <label for="stok" class="label">Stok Obat</label>
        <input type="text" class="form-control" name="stok" id="password" required>
        </div>
        <div class="form-group">
          <label for="harga" class="label">Harga Obat</label>
        <input type="text" class="form-control" name="harga" id="password" required>
        </div>
        <div class="form-group">
          <label for="Supplier" class="label">Supplier Obat</label>
          <select name="supplier" id="Supplier" class="form-control">
              <option value="#" selected>Pilih Supplier</option>
              @foreach ($supply as $data)
          <option value="{{$data->id}}">{{ $data->nama }}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-success">OKE</button>
                <a href="{{ url('obat')}}" class="btn btn-danger">GA JADI</a>
            </div>
        </form>
                @include('bagian.error')
          </div>
        </div>
</div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h2>Data Sebelumnya</h2></div>
                    <ul>
                    <li><span>Nama Obat</span> : <span >{{ $obat->nama }}</span></li>
                        <li><span>Jenis Obat</span> : <span >{{ $obat->jenis }}</span></li>
                        <li><span>Stok Obat</span> : <span >{{ $obat->stok }}</span></li>
                        <li><span>Harga Obat</span> : <span >{{ $obat->harga }}</span></li>
                        <li><span>Supplier Obat</span> : <span >{{ $obat->supplier->nama }}</span></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection