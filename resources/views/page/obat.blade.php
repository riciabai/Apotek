@extends('tata-letak.default')

@section('title')
    Obat
@endsection

@section('form')    
<form method="POST" action="obat">
@csrf
<div class="form-group">
  <label for="nama" class="label">Nama Obat</label>
  <input type="text" class="form-control" name="nama" id="nama" value="{{old('username')}}" required>
</div>
<div class="form-group">
  <label for="jenis" class="label">Jenis Obat</label>
  <input type="text" class="form-control" name="jenis" id="password">
</div>
<div class="form-group">
  <label for="stok" class="label">Stok Obat</label>
  <input type="text" class="form-control" name="stok" id="password">
</div>
<div class="form-group">
  <label for="harga" class="label">Harga Obat</label>
  <input type="text" class="form-control" name="harga" id="password">
</div>
<div class="form-group">
  <label for="Supplier" class="label">Supplier Obat</label>
  <select name="supplier" id="Supplier" class="form-control">
      <option value="#" selected>Pilih Supplier</option>
  </select>
</div>
<div class="form-group">
        <button type="submit" class="btn btn-success">OKE</button>
    </div>
</form>
@endsection

@section('tabel')    
<tr>
      <th>Nama Obat</th>
      <th>Jenis Obat</th>
      <th>Stok Obat</th>
      <th>Harga</th>
</tr>
@endsection
