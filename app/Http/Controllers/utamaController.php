<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utamaController extends Controller
{
    public function index()
    {
        return view('utama/index');
    }
}
