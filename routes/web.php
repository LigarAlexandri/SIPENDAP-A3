<?php

use App\Models\User;
use App\Http\Controllers\Login_C;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RegisterPetaniController;
use App\Models\Berita;

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



Route::get('/', function () {return view('landing');});



// Kelompok Tani
Route::get('/daftar',[RegisterPetaniController::class,'petani']);
Route::post('/daftar', [RegisterPetaniController::class,"regisPetani"]);
Route::get('/datapetani/{id}', [RegisterPetaniController::class,"lihat"]);
Route::get('/verifikasi', [RegisterPetaniController::class, "verif"]);
// Route::get('/register', function () {return view('kelompoktani.daftar');});
Route::get('/home', function () { return view('kelompoktani.dashboard');});


// Pemerintah

// Route::get('/dashboard',[PemerintahController::class,'index']);
Route::get('/dashboard', function () {return view('pemerintah.dashboard');});
Route::get('/verif',[PemerintahController::class,'lihat']);
Route::put('/verif',[PemerintahController::class,'edit']);
Route::get('/keltani',[PemerintahController::class,'kelompok']);
Route::get('/keltani/{id}',[PemerintahController::class,'detailkelompok']);
Route::get('/telegram', function () {return view('pemerintah.telegram');});

// Route::get('/verif',[PemerintahController::class,'regisPetani']);


// Admin
Route::get('/admin', function () {return view('admin.dashboard');});
Route::get('/berita',  [BeritaController::class,'index']);
Route::get('/buatberita', [BeritaController::class,'create']);
Route::get('/buatberita', [BeritaController::class,'create']);
Route::get('/updateberita/{id}', [BeritaController::class,'edit'])->name('edit.berita');
Route::delete('/updateberita/{id}', [BeritaController::class,'destroy'])->name('destroy.berita');
Route::post('/updateberita/{id}', [BeritaController::class,'update'])->name('update.berita');
Route::post('/buatberita', [BeritaController::class,'store']);
Route::get('/detailberita/{id}',  [BeritaController::class,'detail'])->name('detail.berita');
Route::get('/telegramadmin', function () {return view('admin.telegram');});




// Auth
Route::get('/login',[LoginController::class,'user']);
Route::post('/login',[LoginController::class,'authenticate']);


