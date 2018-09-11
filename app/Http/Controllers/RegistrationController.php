<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\pegawai;

class RegistrationController extends Controller
{
    /**
     * Constructor for this class
     * 
     */
    public function __construct()
    {
        # code...
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.daftar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lakukan validasi
        $this->validate($request, [
            'username' => 'required',
            'pass' => 'required|confirmed',
            'alamat' => 'required',
            'kelamin' => 'required',
            'jabatan' => 'required'
        ]);
        //buat instansi user baru
        $user = new User();
        //isi data
        $user->name = $request->username;
        $user->password = $request->pass;
        $user->save();
        //jadikan pegawai
        $user->jadiPegawai($request);
        //login-kan usernya
        auth()->login($user);
        //redirect ke laman utama
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
