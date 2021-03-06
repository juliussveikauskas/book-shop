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
Route::group(['prefix' => env('BASE_URL', ''), 'middleware' => 'web'], function () {
    Auth::routes();

    Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('index');
    Route::resource('books', \App\Http\Controllers\BooksController::class);


    Route::group(['middleware' => 'auth'], function () {
        Route::post('authors', [App\Http\Controllers\AuthorsController::class, 'store']);
        Route::post('genres', [App\Http\Controllers\GenresController::class, 'store']);
    });

    Route::group(['prefix' => 'user', 'middleware' => 'auth', 'as' => 'user.'], function () {
        Route::resource('change-password', App\Http\Controllers\User\ChangePasswordController::class);
        Route::post('reviews', [App\Http\Controllers\User\ReviewsController::class, 'store'])->name('reviews.store');
        Route::post('books/report', [App\Http\Controllers\User\BooksController::class, 'report'])->name('books.report');
        Route::resource('books', App\Http\Controllers\User\BooksController::class);
    });

    Route::get('admin/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login');
    Route::group(['prefix' => 'admin', 'middleware' => ['auth','auth.admin'], 'as' => 'admin.'], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
        Route::resource('genres', App\Http\Controllers\Admin\GenresController::class);
        Route::resource('authors', App\Http\Controllers\Admin\AuthorsController::class);
        Route::post('books/confirm/{book}', [App\Http\Controllers\Admin\BooksController::class, 'confirm'])->name('books.confirm');
        Route::resource('books', App\Http\Controllers\Admin\BooksController::class);
    });

});
