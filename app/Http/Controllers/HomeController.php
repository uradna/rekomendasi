<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == "admin-kecamatan" || Auth::user()->role == "kecamatan") {
            return redirect()->route('kecamatan.dashboard');
        }

        if(Auth::user()->role == "admin-desa" || Auth::user()->role == "desa") {
            return redirect()->route('desa.dashboard');
        }

        return redirect('/logout');

    }
}
