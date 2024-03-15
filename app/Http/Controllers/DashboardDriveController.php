<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardDriveController extends Controller
{
    public function index()
    {
        $googleDisk = \Storage::disk('google');

        $file = "acbawcbawdawbcmiehf32r32r3k2-doc2.pdf";
        // $file = "email.kepala.desa.kec.sawoo.xlsx";
        // $file = "data.png";
        if ($googleDisk->exists($file)) {
            $file_id = $googleDisk->getAdapter()->getMetadata($file)->extraMetadata()['id'];
        } else {
            $file_id = null;
        }
        return view('dashboard', compact('file_id'));
    }
}
