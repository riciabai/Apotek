<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Supplier::all();
        return view('page.supplier', compact('data'));
    }

    public function store(Request $request)
    {
        //validasi request
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        //buat record baru
        //jika gagal kembali dan liatkan kesalahannya
        if (!Supplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ])) {
            return back()->withInput()->withErrors();
        }
        //kembali
        return back()->with(['success' => 'Berhasil memasukkan data baru!']);
    }
}
