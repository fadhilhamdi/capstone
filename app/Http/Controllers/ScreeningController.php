<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    public function screening()
    {
        return view('screening');
    }
}
