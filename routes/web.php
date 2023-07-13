<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TujuanPenawaranController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\KopSuratController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/test1', 'TujuanPenawaranController');
//crud punya table tujuan penawaran
Route::get('/all', [TujuanPenawaranController::class, 'index']);
Route::get('/store', [TujuanPenawaranController::class, 'store']);
Route::get('/byid{id_tujuan}', [TujuanPenawaranController::class, 'show']);
Route::get('/update{id_tujuan}', [TujuanPenawaranController::class, 'update']);
Route::get('/destroy{id_tujuan}', [TujuanPenawaranController::class, 'destroy']);

//crud punya table penawaran
Route::get('/all/penawaran', [PenawaranController::class, 'index']);
Route::get('/store/penawaran', [PenawaranController::class, 'store']);
Route::get('/byid/penawaran{id_penawaran}', [PenawaranController::class, 'show']);
Route::get('/update/penawaran{id_penawaran}', [PenawaranController::class, 'update']);
Route::get('/destroy/penawaran{id_penawaran}', [PenawaranController::class, 'destroy']);

//crud punya table kop surat
Route::get('/all/kopsurat', [KopSuratController::class, 'index']);
Route::get('/store/kopsurat', [KopSuratController::class, 'store']);
Route::get('/byid/kopsurat{id_kop_surat}', [KopSuratController::class, 'show']);
Route::get('/update/kopsurat{id_kop_surat}', [KopSuratController::class, 'update']);
Route::get('/destroy/kopsurat{id_kop_surat}', [KopSuratController::class, 'destroy']);


