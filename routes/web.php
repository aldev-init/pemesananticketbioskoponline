<?php

use App\Http\Controllers\PagesControllerMember;
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

Route::get('/login',[PagesControllerMember::class,'login']);
Route::get('/',[PagesControllerMember::class,'home']);
Route::get('/film',[PagesControllerMember::class,'film']);
Route::get('/daftarfilm',[PagesControllerMember::class,'daftarfilm']);
Route::get('/daftarpemesanantiket',[PagesControllerMember::class,'daftarpemesanantiket']);
Route::get('/pemesanantiket',[PagesControllerMember::class,'pemesanantiket']);
