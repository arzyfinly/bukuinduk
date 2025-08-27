<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DataIndukController, AgamaController, JenisPnsController, JabatanController,
    JurusanController, DataPegawaiController, HomeController, ForgotPasswordController,
    MapelController, UserController, GuestController, ConfigKepalaSekolahController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('import', [DataIndukController::class,'import']);

Auth::routes();

Route::get('forgot-password',                   [ForgotPasswordController::class,'showForgotpassword'])->name('forgot-password');
Route::post('post-forgot-password',             [ForgotPasswordController::class,'forgotPassword'])->name('post-forgot-password');
Route::get('profile',                           [HomeController::class,'showProfile'])->name('profile');
Route::post('post-profile',                     [HomeController::class,'updatePassword'])->name('post-profile');

Route::get('/home',                             [HomeController::class, 'index'])->name('home');

Route::middleware(['admin'])->group(function () {
    Route::post('config-kepala-sekolah',        [ConfigKepalaSekolahController::class, 'store'])->name('config-kepala-sekolah.store');
    Route::get('config-kepala-sekolah',         [ConfigKepalaSekolahController::class, 'index'])->name('config-kepala-sekolah.index');
    Route::resource('user',                     UserController::class);
    Route::resource('agama',                    AgamaController::class);
    Route::resource('jenis-pns',                JenisPnsController::class);
    Route::resource('jabatan',                  JabatanController::class);
    Route::resource('jurusan',                  JurusanController::class);
    Route::resource('mapel',                    MapelController::class);

    Route::resource('data-induk',               DataIndukController::class);
    Route::get('insert-nilai/{id}',             [DataIndukController::class,'createNilai'])->name('data-induk.insert-nilai');

    // Store Nilai
    Route::post('store-sikap/{id}',             [DataIndukController::class,'storeNilaiSikap'])->name('data-induk.store-sikap');
    Route::post('store-kehadiran/{id}',         [DataIndukController::class,'storeNilaiKehadiran'])->name('data-induk.store-kehadiran');
    Route::post('store-status-akhir/{id}',      [DataIndukController::class,'storeStatusAkhirTahun'])->name('data-induk.store-status-akhir');
    Route::post('store-nilai/{id}',             [DataIndukController::class,'storeNilai'])->name('data-induk.store-nilai');
    Route::post('store-nilai-ijzah/{id}',       [DataIndukController::class,'storeNilaiIjazah'])->name('data-induk.store-nilai-ijazah');

    Route::get('edit-nilai/{id}',               [DataIndukController::class,'editNilai'])->name('data-induk.edit-nilai');
    Route::post('import-data-induk',            [DataIndukController::class,'importDataInduk'])->name('data-induk.import');
    route::get('download-template',             [DataIndukController::class,'downloadTemplate'])->name('data-induk.download');
    Route::get('export-pdf/{id}',               [DataIndukController::class,'exportPDF'])->name('data-induk.export-pdf');

    Route::resource('data-pegawai',             DataPegawaiController::class);
    route::get('export-excel',                  [DataPegawaiController::class,'exportMultipleExcel'])->name('data-pegawai.export-excel');
    route::get('single-export/{id}',            [DataPegawaiController::class,'exportExcel'])->name('data-pegawai.single-export');
});

//Data Induk untuk Guest
Route::get('guest-data-induk',                  [GuestController::class,'index'])->name('guest-data-induk.index');
Route::get('guest-export-pdf/{id}',             [GuestController::class,'exportPDF'])->name('guest-data-induk.export-pdf');
