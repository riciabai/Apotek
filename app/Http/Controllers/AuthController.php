<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }

    public function index()
    {
        return view('auth.masuk');
    }

    public function validasi()
    {
        if(\Auth::attempt([
            'name' => request('name'), 
            'password' => request('password')
            ]) == true)
            {
                return redirect('/home');
            }
        return back()->withErrors([
            'message' => 'Username atau password salah!'
        ]);
    }
}
