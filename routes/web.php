<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acehtourController;
use App\Http\Controllers\ratingController;
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

Route::get('/satu',function(){
    return view('tempatwisata/satu');
});
Route::get('/dua',function(){
    return view('tempatwisata/dua');
});
Route::get('/tiga',function(){
    return view('tempatwisata/tiga');
});
Route::get('/empat',function(){
    return view('tempatwisata/empat');
});
Route::get('/lima',function(){
    return view('tempatwisata/lima');
});
Route::get('/enam',function(){
    return view('tempatwisata/enam');
});

Route::get('/halamansatu',function(){
    return view('halamansatu');
});

Route::get('/komentar/store', [acehtourController::class, 'store']);
Route::get('/rating/store', [ratingController::class, 'store']);