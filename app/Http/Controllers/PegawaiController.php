<?php

namespace App\Http\Controllers;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('dashboard');
    }
}
