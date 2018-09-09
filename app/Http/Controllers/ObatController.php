<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obat;
use App\Supplier;

class ObatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $obat = Obat::all();
        $supplier = Supplier::all();
        return view('page.obat', compact('obat','supplier'));
    }

    public function store(Request $req)
    {
        //validasi
        $this->validate($req,[
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'supplier' => 'required'
        ]);
        // ambil instance supplier yang manyamai
        $supply = Supplier::find($req->supplier);
        //tambahkan obat baru berdasarkan request tadi
        $supply->obatBaru($req);

        //kembali
        return back()->with(['success' => 'Berhasil menambahkan obat']);
    }
}
