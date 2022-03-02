<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnggotaController;
use App\Http\Controllers\API\BukuController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TransaksiController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\KategoriController;

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

Route::get('/petugas', [UserController::class, 'index']);//->name('petugas')->middleware('admin');
Route::get('/petugas/add', [UserController::class, 'add']);//->middleware('admin');
Route::post('/petugas/insert', [UserController::class, 'insert']);//->middleware('admin');
Route::get('/petugas/edit/{id}', [UserController::class, 'edit']);//->middleware('admin');
Route::post('/petugas/update/{id}', [UserController::class, 'update']);//->middleware('admin');
Route::get('/petugas/delete/{id}', [UserController::class, 'delete']);//->middleware('admin');


Route::get('/kategori', [KategoriController::class, 'index']);//->name('kategori')->middleware('admin');
Route::post('/kategori/insert', [KategoriController::class, 'insert']);//->middleware('admin');
Route::get('/kategori/edit/{id_kategori}', [KategoriController::class, 'edit']);//->middleware('admin');
Route::post('/kategori/update', [KategoriController::class, 'update']);//->middleware('admin');
Route::post('/kategori/hapus', [KategoriController::class, 'hapus']);//->middleware('admin');

Route::get('/transaksi', [TransaksiController::class, 'index']);//->name('transaksi')->middleware('admin');
/*
Route::group(["middleware" => "admin"], function() {
    Route::prefix("/kategori")->group(function() {
        Route::get("/", [KategoriController::class, 'index']);
        Route::post("/add", [KategoriController::class, 'add']);
    });
});
*/
Route::get("/transaksi/form_peminjaman", [TransaksiController::class, "form_peminjaman"]);//->middleware('admin');
Route::post("/transaksi/simpan_peminjaman", [TransaksiController::class, "simpan_peminjaman"]);//->middleware('admin');

Route::get("/transaksi/detail/{id_transaksi}", [TransaksiController::class, "detail"]);//->middleware('admin');
Route::post("/transaksi/update", [TransaksiController::class, "update"]);//->middleware('admin');
Route::get("/transaksi/bayar_denda/{id_transaksi}", [TransaksiController::class, "bayar_denda"]);//->middleware('admin');
Route::post("/transaksi/bayar_denda/simpan", [TransaksiController::class, "simpan_bayar_denda"]);//->middleware('admin');
Route::post("/transaksi/pengembalian", [TransaksiController::class, "pengembalian"]);//->middleware('admin');
Route::get("/transaksi/hapus/{id_transaksi}", [TransaksiController::class, "hapus"]);//->middleware('admin');
Route::get("/transaksi/hapus/{id_transaksi}", [TransaksiController::class, "hapus"]);//->middleware('admin');
Route::get("/cetak-laporan", [TransaksiController::class, "cetakForm"]);//->name('cetak-laporan')->middleware('admin');
Route::post("/cetak-data-pertanggal/{tglawal}/{tglahir}", [TransaksiController::class, "cetakDataPertanggal"]);
Route::post("/transaksi/rekap", [TransaksiController::class, "rekap"]);

Route::prefix("/role")->group(function() {
    Route::get("/", [RoleController::class, 'index']);//->name('role')->middleware('admin');
    Route::get("/add", [RoleController::class, 'add']);//->middleware('admin');
    Route::post("/insert", [RoleController::class, 'insert']);//->middleware('admin');
    Route::post("/update", [RoleController::class, 'update']);//->middleware('admin');
    Route::get("/edit/{id_role}", [RoleController::class, 'edit']);//->middleware('admin');
    Route::get("/hapus/{id_role}", [RoleController::class, 'hapus']);//->middleware('admin');
});

