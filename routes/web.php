<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('articles', ArticleController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// メール認証を使うため引数を増やす
Auth::routes(['verify' => true]);

// ログイン関連のページのルーティング
// これ1行で全ページ（ホーム画面以外）のルーティングが完了する
