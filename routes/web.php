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
Route::get('/login',[PagesControllerMember::class,'login'])->name('login');
Route::get('/',[PagesControllerMember::class,'home']);
Route::get('/film',[PagesControllerMember::class,'film']);
Route::get('/daftarfilm',[PagesControllerMember::class,'daftarfilm']);

Route::middleware('auth')->group(function(){
    Route::get('/daftarpemesanantiket',[PagesControllerMember::class,'daftarpemesanantiket']);
    Route::get('/pemesanantiket',[PagesControllerMember::class,'pemesanantiket']);
    Route::get('/logout',[SystemControllerMember::class,'logout']);
});

//system Member
Route::post('/register',[SystemControllerMember::class,'register']);
Route::post('/login',[SystemControllerMember::class,'login']);


//Pages Admin
Route::middleware('auth:admin')->group(function(){
    Route::get('/kelolafilm',[PagesControllerAdmin::class,'kelolafilm']);
    Route::get('/logoutadmin',[SystemControllerAdmin::class,'logoutadmin']);
});
//system Admin




