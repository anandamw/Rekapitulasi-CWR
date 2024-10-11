<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

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

Route::get('/detail-mahasiswa', [MahasiswaController::class, 'detail']);
Route::get('/pdf', [PdfController::class, 'view_pdf']);
Route::get('/', [MahasiswaController::class, 'dashboard']);
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
