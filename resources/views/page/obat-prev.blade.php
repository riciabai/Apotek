@extends('tata-letak.master')

@section('content')
    <h1>Semua Obat</h1>
    <div class="row">
        @foreach ($obat as $item)
        <div class="col-4">
            @include('bagian.obat')
        </div>
        @endforeach
    </div>
@endsection