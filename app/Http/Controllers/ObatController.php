<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\ObatV;

class ObatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('view');
    }

    public function view()
    {
        # code...
        $obat = Obat::all();
        return view('page.obat-prev',compact('obat'));
    }
    public function index()
    {
        $obat = Obat::all();
        $supplier = Supplier::all();
        return view('page.obat', compact('obat', 'supplier'));
    }

    public function store(ObatV $req)
    {
        // ambil instance supplier yang manyamai
        $supply = Supplier::find($req->supplier);
        //tambahkan obat baru berdasarkan request tadi
        $supply->obatBaru($req);

        //kembali
        return back()->with('success', 'Berhasil menambahkan obat');
    }

    public function change(ObatV $r)
    {
        # code...
       Obat::find($r->id)->update([
           'nama' => $r->nama,
           'jenis' => $r->jenis,
           'stok' => $r->stok,
           'harga' => $r->harga,
           'supplier_id' => $r->supplier
       ]);
       return redirect('/obat');
    }

    public function edit(Obat $obat)
    {
        $supply = Supplier::all()->where('id', '!=', $obat->supplier->id);

        return view('page.obat-edit', compact('supply', 'obat'));
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return back();
    }
}
