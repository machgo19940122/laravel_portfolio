<?php

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

Route::get('/', function () {
    return view('home');
});

//ホーム画面の表示
Route::get('/home',function(){return view('home');})->name('home');

//ホーム画面からの問い合わせ処理
Route::post('/home', [App\Http\Controllers\ContactsController::class,'postcontact'])->name('postcontact');