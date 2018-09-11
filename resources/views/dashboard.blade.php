@extends('tata-letak.admin')

@section('content')
<br>
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-6">
            <h3>Obat</h3>
            <table class="table table-responsive table-striped">
                <tr>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Stok Obat</th>
                    <th>Harga</th>
                    <th colspan="2" class="text-center">Opsi</th>
                </tr>
                @foreach ($obat as $data)
                <tr>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jenis}}</td>
                    <td>{{$data->stok}}</td>
                    <td>{{$data->harga}}</td>
                    <td><a 
                        href="obat/edit/{{$data->id}}"
                        class="btn btn-block btn-outline-primary">
                        Edit
                    </a>
                </td>
                <td><a 
                    href="obat/hapus/{{$data->id}}"
                    class="btn btn-block btn-outline-danger"
                    >Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-6">
        <h3>Supplier</h3>
        <table class="table table-responsive table-striped">
                <tr>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier </th>
                        <th colspan="2" class="text-center">Opsi</th>
                    </tr>
                    @foreach ($supply as $supplier)
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
        </table>
        </div>
    </div>
<hr>
@endsection