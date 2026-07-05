<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\NewsKontenController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\ModulKontenController;
use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Storage;

// Route::get('/test-minio', function () {
//     return Storage::disk('s3')->exists(
//         'foto/du7Wi8uFWH0PhpRZB22L18WDoFrpg98Iz1MELNRo.jpg'
//     );
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function () {
    return view('pages.about.about');
});
route ::get('/Sysadmin', [AnggotaController::class, 'sysadmin']);
route ::get('/Cyber-Security', [AnggotaController::class, 'cybersecurity']);
route ::get('/Network', [AnggotaController::class, 'networking']);


Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);


Route::resource('jabatan', JabatanController::class);
Route::resource('divisi', DivisiController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('news', NewsController::class);
Route::resource('news-konten', NewsKontenController::class);
Route::resource('modul', ModulController::class);
Route::resource('modul-konten', ModulKontenController::class);
Route::resource('sponsor', SponsorController::class);