<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HalamanawalController;
use App\Http\Controllers\HalamanindexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PemesananController;


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
    return view('index');
});



// Route Halaman Awal
route::get('halamanawal/login',[HalamanawalController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[HalamanawalController::class,'postlogin'])->name('postlogin');
route::get('halamanawal/register',[HalamanawalController::class,'halamanregister'])->name('register');
route::post('/postregis',[HalamanawalController::class,'postregis'])->name('postregis');

// Route Halaman Index
Route::middleware(['auth','ceklevel:admin,member'])->group(function () {
    route::get('halamanindex/index',[HalamanindexController::class,'halamanindex'])->name('index');
    route::get('halamanindex/index',[ProductController::class,'lis'])->name('index');
    route::get('halamanindex/tambah',[HalamanindexController::class,'halamantambah'])->name('tambah');
    route::get('halamanindex/tambah_product',[HalamanindexController::class,'tambahproduct'])->name('tambah_product');
    route::get('halamanindex/ganti',[HalamanindexController::class,'halamanganti'])->name('ganti');
    route::get('halamanindex/logout',[HalamanawalController::class,'logout'])->name('logout');
    

    // Route Halaman Product
    route::post('halamanindex/postproduct',[ProductController::class,'postproduct'])->name('postproduct');
    route::get('halamanindex/daftar_product',[HalamanindexController::class,'daftarproduct'])->name('daftar_product');
    route::get('halamanindex/daftar_product',[ProductController::class,'list'])->name('daftar_product');
    route::get('halamanindex/delete/{id}',[ProductController::class,'delete'])->name('delete');


    route::get('halamanindex/edit/{id}',[ProductController::class,'showData'])->name('edit');
    route::post('halamanindex/edit',[ProductController::class,'update'])->name('update');

    route::get('pemesanan',[PemesananController::class,'index'])->name('pemesanan');

    route::post('halamanindex/ganti',[HalamanindexController::class,'updatePassword'])->name('ganti');
    
    
});

