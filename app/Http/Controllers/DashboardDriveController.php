<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDriveController extends Controller
{
    public function index()
    {
        // $googleDisk = Storage::disk('google');

        // $file = "Surat-Permohonan-Semanding-13-03-2024.pdf";
        // $file = "email.kepala.desa.kec.sawoo.xlsx";
        // $file = "data.png";
        // if ($googleDisk->exists($file)) {
        //     $file_id = $googleDisk->getAdapter()->getMetadata($file)->extraMetadata()['id'];
        // } else {
        //     $file_id = null;
        // }

        // return view('dashboard', compact('file_id'));
        return view('kecamatan.dashboard');
    }

    public function upload(Request $request)
    {
        // dd(basename($request->file('file')->getClientOriginalName(), '.'.$request->file('file')->getClientOriginalExtension()));
        // dd($request->file('file')->getClientOriginalName());
        $ext = $request->file('file')->getClientOriginalExtension();
        $filename = "Surat-Permohonan-Semanding-13-03-2024.".$ext;
        $path = $request->file('file')->storeAs('', $filename, 'google');
        dd($path);
    }

    public function delete()
    {
        Storage::disk('google')->delete('Surat-Permohonan-Semanding-13-03-2024.docx');
        dd('deleted');
    }
}
