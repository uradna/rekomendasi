<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaHomeController extends Controller
{
    public function index()
    {
        return view('desa.dashboard');
    }
}
