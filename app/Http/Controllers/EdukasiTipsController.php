<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiTipsController extends Controller
{
    public function index()
    {
        return view ('edukasi-tips');
    }
}
