<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanAwalController extends Controller
{
    public function index()
    {
        return view('pemeriksaan-awal');
    }
}
