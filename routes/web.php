<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\commentController;
use App\Models\Post;

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

// postテーブル表示
Route::get('/posts', [PostController::class, 'index']);

// テスト用
Route::get('/test', [PostController::class, 'onePost']);

// コメント表示
Route::get('/comment', [commentController::class, 'comment_list']);
