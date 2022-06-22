<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiswaController, AuthController, PengaturanInstansiController, AbsensiController, UserController, AdminController, SyncronController};

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

// AUTH =============================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

// Pengaturan Instansi  ========================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'pengaturan-instansi'

], function ($router) {
    Route::post('/store', [PengaturanInstansiController::class, 'store']);
    Route::post('/update/{id}', [PengaturanInstansiController::class, 'update']);
    Route::get('/get-all', [PengaturanInstansiController::class, 'getAll']);
    Route::get('/get-all-by-instansi', [PengaturanInstansiController::class, 'getAllByInstansi']);
    Route::get('/get-today', [PengaturanInstansiController::class, 'getToday']);
    Route::delete('/delete/{id}', [PengaturanInstansiController::class, 'delete']);
    Route::post('/get-by-day', [PengaturanInstansiController::class, 'getByDay']);
    Route::get('/get-by-id/{id}', [PengaturanInstansiController::class, 'getById']);
});

// Absensi  ========================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'absensi'

], function ($router) {
    Route::post('/', [AbsensiController::class, 'absensi']);
    Route::get('/get-all', [AbsensiController::class, 'getAll']);
    Route::get('/get-by-instansi', [AbsensiController::class, 'getByInstansi']);
    Route::post('/get-by-date', [AbsensiController::class, 'getByDate']);
    Route::get('/get-by-id-pengaturan/{id}', [AbsensiController::class, 'getByIdPengaturan']);
});

// Siswa  ========================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'siswa'

], function ($router) {
    Route::get('/', [SiswaController::class, 'getSiswa']);
});

// Admin  ========================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'admin'

], function ($router) {
    Route::get('/tidak-hadir', [AdminController::class, 'getTidakHadir']);
    Route::post('/absensi-by-admin/{id}', [AdminController::class, 'absensiByAdmin']);
});

// Push  ========================================================
Route::group([
    'middleware' => 'api',
    'prefix' => 'sync'

], function ($router) {
    Route::get('/absensi', [App\Http\Controllers\SyncronController::class, 'syncronus']);
});

Route::get('/test', function(){
    echo "ok";
});