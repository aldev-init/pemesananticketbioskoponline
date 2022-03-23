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
    Route::middleware(['auth','cantback'])->group(function(){
        Route::get('/daftarpemesanantiket','daftarpemesanantiket');
        Route::get('/pemesanantiket','pemesanantiket');
        Route::get('/pemesanantiket/{id}','pemesanantiketid');
    });
});


//system
//member
Route::controller(SystemControllerMember::class)->group(function(){
    Route::middleware(['auth','cantback'])->group(function(){
        Route::get('/logout','logout');
        Route::post('/pemesanantiket','pemesanantiket');
        Route::post('/hapuspemesanan','hapuspemesanan');
        Route::get('/tiket/{id}','tiket');
        Route::get('/debugtiket','debugtiket');
    });
    Route::post('/register','register');
    Route::post('/login','login');
});


//Pages Admin
Route::controller(PagesControllerAdmin::class)->group(function(){
    Route::middleware(['auth:admin','cantback'])->group(function(){
        Route::get('/kelolafilm','kelolafilm');
        Route::get('/tambahfilm','tambahfilm');
        Route::get('/detailfilm/{id}','detailfilm');
        //crud jam
        Route::get('/kelolajam','kelolajam');
        //crud kategori
        Route::get('/kelolakategori','kelolakategori');
        Route::get('/tambahkategori','tambahkategori');
        Route::get('/editkategori/{id}','editkategori');
        //crud studio
        Route::get('/kelolastudio','kelolastudio');
        Route::get('/tambahstudio','tambahstudio');
        Route::get('/editstudio/{id}','editstudio');
        //crud jam tayang
        Route::get('/tambahjam','tambahjam');
        Route::get('/editjam/{id}','editjam');
    });
});


//system Admin
Route::controller(SystemControllerAdmin::class)->group(function(){
    Route::middleware(['auth:admin','cantback'])->group(function(){
        Route::get('/logoutadmin','logoutadmin');
        Route::post('/tambahfilm','tambahfilm');
        Route::post('/hapusfilm/{id}','hapusfilm');
        Route::post('/editfilm/{id}','editfilm');
        //crud kategori
        Route::post('/tambahkategori','tambahkategori');
        Route::post('/editkategori/{id}','editkategori');
        Route::get('/hapuskategori/{id}','hapuskategori');
        //crud studio
        Route::post('/tambahstudio','tambahstudio');
        Route::post('/editstudio/{id}','editstudio');
        Route::get('/hapusstudio/{id}','hapusstudio');
        //crud jam tayang
        Route::post('/tambahjam','tambahjam');
        Route::post('/editjam/{id}','editjam');
        Route::get('/hapusjam/{id}','hapusjam');
    });
});



