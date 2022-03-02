<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnggotaController;
use App\Http\Controllers\API\BukuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/anggota', [AnggotaController::class, 'index']);
//Route::get('/anggota/add', [AnggotaController::class, 'add']);//->middleware('admin');
Route::post('/anggota_api/insert', [AnggotaController::class, 'insert']);//->middleware('admin');
Route::get('/anggota/edit/{id_anggota}', [AnggotaController::class, 'edit']);//->middleware('admin');
Route::post('/anggota/update/', [AnggotaController::class, 'update']);//->middleware('admin');
Route::get('/anggota/delete/{id_anggota}', [AnggotaController::class, 'delete']);//->middleware('admin');
//cobag
Route::get('/buku', [BukuController::class, 'index']);
