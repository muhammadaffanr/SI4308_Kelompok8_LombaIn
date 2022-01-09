<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaControllers extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
