<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'email' => 'requred|email:dns|unique:users',
        //     'no_hp'=> 'required|numeric|max:10',
        //     'password'=> 'requred|min5|max:255',
        //     'password2'=> 'requred|min5|max:255'

        // ]);
        User::Create();
        // $request->session()->flash('status', 'Berhasil Registrasi!');
        return redirect('/')->with('status', 'Berhasil Login!');
    }
}
