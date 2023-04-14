<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// ke menu dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ke menu sewa
Route::get('/sewa', function () {
    return view('karyawan/sewa');
});
Route::get('/tambah-data', function () {
    return view('karyawan.tambah-sewa');
});