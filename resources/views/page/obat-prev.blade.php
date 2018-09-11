@extends('tata-letak.master')

@section('content')
    <h1>Semua Obat</h1>
    <div class="row">
        @foreach ($obat as $item)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                      <h5 class="card-title">{{ $item->nama}}</h5>
                      <div class="card-content">
                            <div class="row">
                                <div class="col-6">
                                    <strong>JENIS</strong> :{{ $item->jenis }}
                                </div>
                                <div class="col-6">
                                    <strong>STOK</strong> :{{ $item->stok }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 ">
                                    <strong>HARGA</strong> :{{ $item->harga }}
                                </div>
                                <div class="col-6 ">
                                    <a href="#" class="btn btn-block btn-primary"> Beli </a>
                                </div>
                            </div>
                      </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection