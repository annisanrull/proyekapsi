<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\HalamanDashboardController;

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
    return view('login');
});

// route untuk melakukan login untuk masuk ke dashboard
// menggunakan post untuk mengambil data
Route::post('/masuk', [LoginController::class, 'masuk']);
Route::get('/keluar', [LoginController::class, 'keluar']);

///\\\///\\\///\\\///\\
// route untuk masuk ke halaman dashboard
Route::get('/dashboard', [HalamanDashboardController::class, 'index']);
Route::post('/voting', [HalamanDashboardController::class, 'voting']);
//utnuk melihat jumlah voting
Route::get('/jumlahvoting/{id}', [HalamanDashboardController::class, 'jumlahvoting']);
///\\\///\\\///\\\///\\


///\\\///\\\///\\\///\\
//route untuk menangani tipe pemilihan
Route::get('/tipe', [HalamanDashboardController::class, 'tipePemilihan']);

// toute untuk menambahkan tipe pemilihan
Route::get('/tipe/tambah', [HalamanDashboardController::class, 'tambahtipe']);

// route untuk menambahkan tipe kedalam database
Route::post('/tambahtipe', [HalamanDashboardController::class, 'inserttipe']);
// Rout unutuk hpus tipe
Route::get('/hapustipe/{id}', [HalamanDashboardController::class, 'hapustipe']);
///\\\///\\\///\\\///\\


//// \\\\ //// \\\\\
//menampilkan semua calon
Route::get('/semuacalon', [CalonController::class, 'index']);
//route untuk menampilkan form tambah calon
Route::get('/tambahcalon', [CalonController::class, 'calon']);
Route::post('/tambahcalon/tambah', [CalonController::class, 'tambah']);
//Route untuk menghapus calon
Route::get('/hapuscalon/{id}', [CalonController::class, 'hapuscalon']);
//route untuk edit calon
Route::get('/editcalon/{id}', [CalonController::class, 'editcalon']);
Route::post('/updatecalon/{id}', [CalonController::class, 'updatecalon']);
Route::get('/lihatcalon/{id}', [CalonController::class, 'lihatcalon']);

////\\\\   ///\\\\


//// \\\\   ////\\\\ ////\\\\////\\\
Route::get('/semuawarga', [WargaController::class, 'index']);
Route::get('/lihatwarga/{id}', [WargaController::class, 'lihatwarga']);
Route::get('/tambahwarga', [WargaController::class, 'tambahwarga']);
Route::get('/hapuswarga/{id}', [WargaController::class, 'hapuswarga']);
Route::get('/editwarga/{id}', [WargaController::class, 'editwarga']);
Route::post('/buatdatawarga', [WargaController::class, 'buatdatawarga']);
Route::post('/updatewarga/{id}', [WargaController::class, 'updatewarga']);

//// \\\\   ////\\\\ ////\\\\////\\\