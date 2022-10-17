<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\post;

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
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

// Route::get('/posts', App\Http\Controllers\postsContoroller::class);

// postモデル取得
Route::get('/posts', [post::class, 'index']);
