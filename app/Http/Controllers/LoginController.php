<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'alpha', 'min:5', 'max:6'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ],
        [
            'name.required' => 'Masukan username terlebih dahulu',
            'name.alpha' => 'Username yang di masukan tidak bisa selain huruf',
            'name.min' => 'karakter yang di masukan harus 5 huruf',
            'name.max' => 'karakter yang di masukan tidak dapat lebih dari 6 huruf',
            'email.email' => 'ini bukan bagian dari email'
        ]
       );


        return response()->json(['message' => 'Login successful', 'data' => $request->all()]);
    }
}
