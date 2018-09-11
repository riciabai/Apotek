<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Supplier;


class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $obat = Obat::all();
        $supply = Supplier::all();
        return view('dashboard', compact('obat','supply'));
    }
}
