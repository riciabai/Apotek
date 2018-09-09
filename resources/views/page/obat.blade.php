@extends('tata-letak.obat')

@section('content')
    <br>
    <div class="row">
        <div class="col-4">
            <h2>Obat</h2>
        </div>
        <div class="col-8 ml-auto">
            <div class="btn-group">
            <a href="{{url('obat/baru')}}" class="btn btn-primary">
                Tambah Obat
            </a>
            </div>
        </div>
    </div>
    <hr>

@endsection