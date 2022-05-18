<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acehtourController;

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
    return view('first');
});

Route::get('/komentar',function(){
    return view('komentar');
});

Route::get('/rating',function(){
    return view('rating');
});

Route::get('/halaman1',function(){
    return view('halamansatu');
});

Route::get('/komentar/store', [acehtourController::class, 'store']);