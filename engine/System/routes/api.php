<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/loginTime', [
        AuthController::class, 'loginTime'
    ]);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('/login-checks', [
        AuthController::class, 'userChecks'
    ]);

    Route::post('/user-qr-code', [
        AuthController::class, 'qrCode'
    ]);

    Route::post('/user-qr-code-pin', [
        AuthController::class, 'qrCodePin'
    ]);

    Route::post('/user-join', [
        AuthController::class, 'Join_card'
    ]);

    Route::post('/user-upsaldo', [
        AuthController::class, 'UpdateSaldo'
    ]);
    Route::get('/gen-user/{jumlah}', [
        AuthController::class, 'genUser'
    ]);
    Route::get('/user-free', [
        AuthController::class, 'getDataUserReady'
    ]);
    Route::post('/update-data-user', [
        AuthController::class, 'updateDataUser'
    ]);
    Route::post('/changePassword', [
        AuthController::class, 'changePassword'
    ]);
    Route::delete('/delete', [
        AuthController::class, 'loginTime'
    ]);
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'user'

], function ($router) {
    Route::get('/getUser/{slug}', [
        AuthController::class, 'getUserJoinByQR'
    ]);
});

// Siswa
Route::group([
    'middleware' => 'api',
    'prefix' => 'siswa'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\SiswaController::class, 'create'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\SiswaController::class, 'updates'
    ]);
    Route::delete('/delete/{slug}', [
        \App\Http\Controllers\SiswaController::class, 'deleteSiswa'
    ]);
    Route::get('/get', [
        \App\Http\Controllers\SiswaController::class, 'getSiswa'
    ]);
    Route::get('/get-siswa', [
        \App\Http\Controllers\SiswaController::class, 'getSiswaNoJoin'
    ]);

    Route::get('/getOne', [
        \App\Http\Controllers\SiswaController::class, 'getSiswaOne'
    ]);
    Route::get('/get-table', [
        \App\Http\Controllers\SiswaController::class, 'getSiswaTable'
    ]);
    Route::get('/get-table-connected', [
        \App\Http\Controllers\SiswaController::class, 'getSiswaTableConnet'
    ]);
    Route::post('/siswa-qr-code', [
        \App\Http\Controllers\SiswaController::class, 'siswaQrCode'
    ]);
    Route::post('/siswa-qr-code-pin', [
        \App\Http\Controllers\SiswaController::class, 'siswaQrCodePin'
    ]);
    Route::post('/siswa-pin', [
        \App\Http\Controllers\SiswaController::class, 'siswaPin'
    ]);
    Route::get('/get-siswa-in-relation/{slug}', [
        \App\Http\Controllers\SiswaController::class, 'getSiswaRelation'
    ]);
});


// instansi
Route::group([
    'middleware' => 'api',
    'prefix' => 'instansi'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\InstansiController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\InstansiController::class, 'update'
    ]);
    Route::post('/delete', [
        \App\Http\Controllers\InstansiController::class, 'Delete'
    ]);
    Route::get('/get', [
        \App\Http\Controllers\InstansiController::class, 'get'
    ]);
    Route::get('/getbykode', [
        \App\Http\Controllers\InstansiController::class, 'getSlug'
    ]);
    Route::get('/getbyauth', [
        \App\Http\Controllers\InstansiController::class, 'getByAuth'
    ]);
    Route::get('/req/{id?}', [
        \App\Http\Controllers\InstansiController::class, 'getById'
    ]);
    Route::post('/update-saldo-bank', [
        \App\Http\Controllers\InstansiController::class, 'updateSaldoBank',
    ]);
    Route::post('/update-saldo-tunai', [
        \App\Http\Controllers\InstansiController::class, 'updateSaldoTunai',
    ]);
    Route::post('/inisiasi', [
        \App\Http\Controllers\InstansiController::class, 'Inisiasi',
    ]);
});

// Kantin
Route::group([
    'middleware' => 'api',
    'prefix' => 'kantin'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\KantinController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\KantinController::class, 'Updated'

    ]);
    Route::get('/delete/{slug}', [
        \App\Http\Controllers\KantinController::class, 'Delete'
    ]);
    Route::get('/get/{slug?}', [
        \App\Http\Controllers\KantinController::class, 'get'
    ]);
    Route::get('/get-by-auth', [
        \App\Http\Controllers\KantinController::class, 'getByAuth'
    ]);
    Route::get('/get-purchase/{slug?}/{slug2?}', [
        \App\Http\Controllers\KantinController::class, 'RiwayatPembelian'
    ]);
    Route::get('/riwayat-transaksi-kantin/{slug?}', [
        \App\Http\Controllers\KantinController::class, 'RiwayatTransaksiKantin'
    ]);
    Route::post('/edit-img', [
        \App\Http\Controllers\KantinController::class, 'UpdateImage'
    ]);
    Route::post('/update-kantin', [
        \App\Http\Controllers\KantinController::class, 'updateByUser'
    ]);
    Route::get('/getRiwayatTypeKantin/{id_user}/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatTypeKantin'
    ]);

    // Route::get('/req/{id?}', [
    //     \App\Http\Controllers\InstansiController::class, 'getById'
    // ]);
});


// product
Route::group([
    'middleware' => 'api',
    'prefix' => 'product'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\ProductController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\ProductController::class, 'Updates'
    ]);
    Route::delete('/delete/{slug}', [
        \App\Http\Controllers\ProductController::class, 'Deletes'
    ]);
    Route::get('/get/{slug?}', [
        \App\Http\Controllers\ProductController::class, 'get'
    ]);
    // Route::get('/req/{id?}', [
    //     \App\Http\Controllers\InstansiController::class, 'getById'
    // ]);
});

// kategori
Route::group([
    'middleware' => 'api',
    'prefix' => 'kategori'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\KategoriController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\KategoriController::class, 'Updates'
    ]);
    Route::delete('/delete/{slug}', [
        \App\Http\Controllers\KategoriController::class, 'Deletes'
    ]);
    Route::get('/get/{slug?}', [
        \App\Http\Controllers\KategoriController::class, 'get'
    ]);
});

// transaksi & kasir
Route::group([
    'middleware' => 'api',
    'prefix' => 'kasir'

], function ($router) {
    Route::post('/create-troli', [
        \App\Http\Controllers\TroliController::class, 'Created'
    ]);
    Route::post('/transaksi-kantin', [
        \App\Http\Controllers\TransaksiController::class, 'Transaksi_kantitn'
    ]);
});


// Riwayat
Route::group([
    'middleware' => 'api',
    'prefix' => 'riwayat'

], function ($router) {
    Route::get('/getById/{slug}/{param?}/', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayat'
    ]);
    Route::get('/get-by-auth/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getByAuth'
    ]);
    Route::get('/get-riwayat-all/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatAll'
    ]);
    Route::get('/get-riwayat-by-week/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatByWeek'
    ]);
    Route::get('/get-saldo-user/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatSaldoUser'
    ]);
    Route::get('/get-saldo-byid/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatSaldoIdRiwayat'
    ]);
    Route::get('/history/{slug?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'History'
    ]);
});



// Jabatan
Route::group([
    'middleware' => 'api',
    'prefix' => 'jabatan'

], function ($router) {
    Route::post('/create/', [
        \App\Http\Controllers\JabatanController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\JabatanController::class, 'Updated'
    ]);
    Route::get('/delete/{slug}', [
        \App\Http\Controllers\JabatanController::class, 'Deleted'
    ]);
    Route::get('/get-all', [
        \App\Http\Controllers\JabatanController::class, 'getAll'
    ]);
    Route::get('/get-byid/{slug}', [
        \App\Http\Controllers\JabatanController::class, 'getById'
    ]);
    Route::get('/get-table', [
        \App\Http\Controllers\JabatanController::class, 'getJabatanTable'
    ]);
});


// Staff
Route::group([
    'middleware' => 'api',
    'prefix' => 'staf'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\StaffController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\StaffController::class, 'Updated'
    ]);
    Route::get('/delete/{slug}', [
        \App\Http\Controllers\StaffController::class, 'Deleted'
    ]);
    Route::get('/get', [
        \App\Http\Controllers\StaffController::class, 'get'
    ]);
    Route::get('/getAll', [
        \App\Http\Controllers\StaffController::class, 'getAll'
    ]);
    Route::get('/get-by-user/{slug}', [
        \App\Http\Controllers\StaffController::class, 'getByUser'
    ]);
    Route::get('/get-by-table/{slug?}', [
        \App\Http\Controllers\StaffController::class, 'getByTable'
    ]);
    Route::get('/get-by-table-connnect/{slug?}', [
        \App\Http\Controllers\StaffController::class, 'getByTableConneted'
    ]);
    Route::post('/card-connnetion', [
        \App\Http\Controllers\StaffController::class, 'konesi_kartu'
    ]);
    Route::get('/get-tester', [
        \App\Http\Controllers\StaffController::class, 'getStaffTester'
    ]);
});


// orangtua
Route::group([
    'middleware' => 'api',
    'prefix' => 'orangtua'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\OrangTuaController::class, 'Created'
    ]);
    Route::post('/update', [
        \App\Http\Controllers\OrangTuaController::class, 'Updated'
    ]);
    Route::get('/delete/{slug}', [
        \App\Http\Controllers\OrangTuaController::class, 'Deleted'
    ]);
    Route::get('/get', [
        \App\Http\Controllers\OrangTuaController::class, 'get'
    ]);
    Route::get('/get-by-id/{slug}', [
        \App\Http\Controllers\OrangTuaController::class, 'getById'
    ]);
    Route::get('/get-by-table', [
        \App\Http\Controllers\OrangTuaController::class, 'getByTable'
    ]);
});

// Guru
Route::group([
    'middleware' => 'api',
    'prefix' => 'guru'

], function ($router) {
    Route::post('/inisiasi', [
        \App\Http\Controllers\GuruController::class, 'Inisiasi'
    ]);
    Route::post('/bulk_data_guru', [
        \App\Http\Controllers\GuruController::class, 'bulk_data_guru'
    ]);
    Route::get('/bulk-data-user', [
        \App\Http\Controllers\GuruController::class, 'bulk_data_user'
    ]);
    Route::get('/get-guru-all', [
        \App\Http\Controllers\GuruController::class, 'getGuruAll'
    ]);
    Route::get('/get-by-id/{slug}', [
        \App\Http\Controllers\GuruController::class, 'getByid'
    ]);
    Route::get('/get-by-search', [
        \App\Http\Controllers\GuruController::class, 'getBySearch'
    ]);
});

// dana
Route::group([
    'middleware' => 'api',
    'prefix' => 'dana'

], function ($router) {
    Route::post('/pencairan', [
        \App\Http\Controllers\PencairanController::class, 'Pencairan'
    ]);
    Route::get('/riwayat-pencairan/{slug}/{slug2?}', [
        \App\Http\Controllers\RiwayatSaldoController::class, 'getRiwayatPencairanh'
    ]);
});

// paymnet
Route::group([
    'middleware' => 'api',
    'prefix' => 'payment'

], function ($router) {
    Route::post('/reponse-bank', [
        \App\Http\Controllers\PaymentController::class, 'ResponseTransfer',
    ]);
    Route::post('/transfer-va', [
        \App\Http\Controllers\PaymentController::class, 'CreateVaTransfer',
    ]);
    Route::get('/get-by-user', [
        \App\Http\Controllers\PaymentController::class, 'getTrasfer',
    ]);
    Route::get('/get-by-kode/{slug}', [
        \App\Http\Controllers\PaymentController::class, 'getTrasferbyKode',
    ]);
    Route::get('/cek-saldo', [
        \App\Http\Controllers\PaymentController::class, 'CekSaldo',
    ]);
});

// notification
Route::group([
    'middleware' => 'api',
    'prefix' => 'notification'

], function ($router) {
    Route::post('/create', [
        \App\Http\Controllers\NotificationController::class, 'Create',
    ]);
    Route::get('/get', [
        \App\Http\Controllers\NotificationController::class, 'Get',
    ]);
    Route::get('/update-status/{slug}', [
        \App\Http\Controllers\NotificationController::class, 'UpdateStatus',
    ]);
    Route::get('/getbyid/{slug}', [
        \App\Http\Controllers\NotificationController::class, 'GetById',
    ]);
    Route::get('/delete/{slug}', [
        \App\Http\Controllers\NotificationController::class, 'Deletes',
    ]);
});

// api guru
Route::group([
    'middleware' => 'api',
    'prefix' => 'rest'

], function ($router) {
    Route::get('/get-guru/{slug?}', [
        \App\Http\Controllers\ApiController::class, 'getGuru',
    ]);
});


// data
Route::group([
    'middleware' => 'api',
    'prefix' => 'data'

], function ($router) {
    Route::get('/get-first-user', [
        \App\Http\Controllers\DataController::class, 'getUser',
    ]);
    Route::get('/tester', [
        \App\Http\Controllers\DataController::class, 'Tester',
    ]);
    Route::get('/riwayat-transaksi-siswa/{slug}', [
        \App\Http\Controllers\DataController::class, 'getHistorySiswa',
    ]);
    Route::post('/tester-post', [
        \App\Http\Controllers\DataController::class, 'TesterPost',
    ]);
});

// data
Route::group([
    'middleware' => 'api',
    'prefix' => 'user'

], function ($router) {
    Route::get('/get-qr-code/{slug}', [
        \App\Http\Controllers\UserController::class, 'getUserQrCode',
    ]);
});


// Test
Route::group([
    'middleware' => 'api',
    'prefix' => 'test'

], function ($router) {
    Route::get('/cek', function () {
        return "okey";
    });

    Route::get('/repair', [
        \App\Http\Controllers\RepairBugController::class, 'RepairBug',
    ]);
});

// debug

// UnitDebug
Route::group([
    'middleware' => 'api',
    'prefix' => 'debug'

], function ($router) {
    Route::get('/cek', function () {
        return "okey";
    });
    Route::post('/debug-pengembalianDana', [
        \App\Http\Controllers\UnitDebugController::class, 'pengembalianDana',
    ]);
    Route::get('/unit-test', [
        \App\Http\Controllers\UnitDebugController::class, 'UnitTest',
    ]);
});
