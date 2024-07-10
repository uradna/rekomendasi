<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Desa;

class KecamatanHomeController extends Controller
{
    public function index()
    {
        return view('kecamatan.dashboard');
    }
}
