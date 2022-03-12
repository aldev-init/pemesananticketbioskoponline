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
    Route::get('/film','film');
    Route::get('/daftarfilm','daftarfilm');
    Route::middleware(['auth'])->group(function(){
        Route::get('/daftarpemesanantiket','daftarpemesanantiket');
        Route::get('/pemesanantiket','pemesanantiket');
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
    });
});


//system Admin
Route::controller(SystemControllerAdmin::class)->group(function(){
    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/logoutadmin','logoutadmin');
        Route::post('/tambahfilm','tambahfilm');
        Route::post('/hapusfilm/{id}','hapusfilm');
    });
});



