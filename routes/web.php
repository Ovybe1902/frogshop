<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrogController;
use App\Http\Controllers\Auth\ClientLoginController;
use App\Http\Controllers\TransactionController;

Route::get('/user/transactions', [TransactionController::class, 'showUserTransactions'])
     ->name('user.transactions')
     ->middleware('auth');
Route::post('/validate-cart', [TransactionController::class, 'validateCart'])
    ->name('validate.cart')
    ->middleware('auth');
Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
Route::post('/client/login', [ClientLoginController::class, 'login']);
Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');
Route::get('/frogs', [FrogController::class, 'index'])->name('frogs.index');
Route::post('/frogs/{id}/add-to-cart', [FrogController::class, 'addToCart'])->name('frogs.addToCart');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/', function () {
    return view('welcome');
});
