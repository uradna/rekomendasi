<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KecamatanUserDesaManagementController extends Controller
{
    public function index()
    {
        return view('kecamatan.userdesa');
    }

    public function userAll()
    {
        $user = DB::select('SELECT 
        users.id AS DT_RowId,
        users.id,
        units.nama as desa,
        users.name as nama,
        users.jabatan, 
        users.hp, 
        users.email, 
        users.role,
        users.unit_id
        FROM users
        JOIN units ON users.unit_id = units.id
        WHERE role = "operator-desa" OR role = "admin-desa"');

        $data = collect($user);
        return response()->json([
            'data'    => $data->values()
        ]);
    }
}
