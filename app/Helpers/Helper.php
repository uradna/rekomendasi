<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Unit;

if (!function_exists('getDriveFileId')) {
    function getDriveFileId($url)
    {
        $urlParts = parse_url($url);
        parse_str($urlParts['query'], $queryParameters);
        $id = isset($queryParameters['id']) ? $queryParameters['id'] : null;

        return $id;
    }
}

if (!function_exists('allDesa')) {
    function allDesa()
    {
        $desa = Unit::where('tipe', 'desa')->orderBy('nama')->get();
        return $desa;
    }
}
