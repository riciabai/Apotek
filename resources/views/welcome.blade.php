@extends('tata-letak.master')
@section('content')
<!-- Example row of columns -->
<h4 class="display-4"> Obat Topcer</h4>
<div class="row">
  @foreach ($obat as $item)
  <div class="col-md-4">
      @include('bagian.obat')
    </div>
  @endforeach
</div>
<hr>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Mamak</h5>
      <div class="card-content">
        <q>Apa kau liat liat???</q>
      </div>
    </div>
  </div>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Pak Eko</h5>
          <div class="card-content">
            <q>Apotek greget adalah kesalahan terbesar dalam hidup saya</q>
          </div>
        </div>
  </div>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Derpina</h5>
          <div class="card-content">
            <q>Ahhh.... dameh bang!!!!</q>
          </div>
        </div>
  </div>
</div>
@endsection

