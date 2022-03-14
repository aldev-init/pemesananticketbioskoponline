<?php

use App\Http\Controllers\PagesControllerMember;
use App\Http\Controllers\PagesControllerAdmin;
use App\Http\Controllers\SystemControllerMember;
use App\Http\Controllers\SystemControllerAdmin;
use Illuminate\Support\Facades\Route;

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

//pages
//member
Route::controller(PagesControllerMember::class)->group(function (){
    Route::get('/login','login')->name('login');
    Route::get('/','home');
    Route::get('/film/{id}','film');
    Route::get('/daftarfilm','daftarfilm');
    Route::middleware(['auth'])->group(function(){
        Route::get('/daftarpemesanantiket','daftarpemesanantiket');
        Route::get('/pemesanantiket','pemesanantiket');
        Route::get('/pemesanantiket/{id}','pemesanantiketid');
    });
});


//system
//member
Route::controller(SystemControllerMember::class)->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/logout','logout');
    });
    Route::post('/register','register');
    Route::post('/login','login');
});


//Pages Admin
Route::controller(PagesControllerAdmin::class)->group(function(){
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/kelolafilm','kelolafilm');
        Route::get('/tambahfilm','tambahfilm');
        Route::get('/kelolajam','kelolajam');
        Route::get('/detailfilm/{id}','detailfilm');
        Route::get('/kelolakategori','kelolakategori');
        Route::get('/tambahkategori','tambahkategori');
        Route::get('/editkategori/{id}','editkategori');
    });
});


//system Admin
Route::controller(SystemControllerAdmin::class)->group(function(){
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/logoutadmin','logoutadmin');
        Route::post('/tambahfilm','tambahfilm');
        Route::post('/hapusfilm/{id}','hapusfilm');
        Route::post('/editfilm/{id}','editfilm');
        Route::post('/tambahkategori','tambahkategori');
        Route::post('/editkategori/{id}','editkategori');
        Route::get('/hapuskategori/{id}','hapuskategori');
    });
});



