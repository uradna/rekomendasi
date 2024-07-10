<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KecamatanTemplateController extends Controller
{
    public function index()
    {
        return view('kecamatan.template');
    }

    public function new()
    {


    }

    public function create(TemplateCreateRequest $request)
    {
        // if(Auth::user()->role == "admin-kecamatan" || Auth::user()->role == "kecamatan") {
        //     return redirect()->route('kecamatan.dashboard');
        // }

        // if(Auth::user()->role == "admin-desa" || Auth::user()->role == "desa") {
        //     return redirect()->route('desa.dashboard');
        // }

        // return redirect('/logout');

    }
}
