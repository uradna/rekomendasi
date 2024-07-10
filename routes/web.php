<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KecamatanHomeController;
use App\Http\Controllers\KecamatanTemplateController;
use App\Http\Controllers\KecamatanUserDesaManagementController;


use App\Http\Controllers\DesaHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardDriveController::class, 'index'])->name('dashboard');
//     Route::get('/delete', [DashboardDriveController::class, 'delete'])->name('delete');
//     Route::post('/upload', [DashboardDriveController::class, 'upload'])->name('upload');
// });

Route::middleware(['auth','role.kecamatan'])->group(function () {
    Route::get('/kecamatan', [KecamatanHomeController::class, 'index'])->name('kecamatan.dashboard');

    Route::get('/kecamatan/template', [KecamatanTemplateController::class, 'index'])->name('kecamatan.template');
    Route::get('/kecamatan/template/new', [KecamatanTemplateController::class, 'new'])->name('kecamatan.template.new');
    Route::get('/kecamatan/template/edit/{id}', [KecamatanTemplateController::class, 'read'])->name('kecamatan.template.read');
    Route::post('/kecamatan/template/create', [KecamatanTemplateController::class, 'create'])->name('kecamatan.template.create');
    Route::post('/kecamatan/template/update', [KecamatanTemplateController::class, 'update'])->name('kecamatan.template.update');
    Route::get('/kecamatan/template/delete/{id}', [KecamatanTemplateController::class, 'delete'])->name('kecamatan.template.delete');
});

Route::middleware(['auth','role.adminkecamatan'])->group(function () {
    Route::get('/kecamatan/user/desa', [KecamatanUserDesaManagementController::class, 'index'])->name('kecamatan.user.desa');
    Route::get('/kecamatan/user/desa/api', [KecamatanUserDesaManagementController::class, 'userAll'])->name('kecamatan.user.desa.json');
});

Route::middleware(['auth','role.desa'])->group(function () {
    Route::get('/desa', [DesaHomeController::class, 'index'])->name('desa.dashboard');
});

require __DIR__.'/auth.php';
