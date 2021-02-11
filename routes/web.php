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

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('admin/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
        Route::resource('genres', App\Http\Controllers\Admin\GenresController::class)->names([
            'index' => 'admin.genres',
            'create' => 'admin.genre.create',
            'store' => 'admin.genre.store',
            'destroy' => 'admin.genre.delete',
            'edit' => 'admin.genre.edit',
            'update' => 'admin.genre.update'
        ]);
        Route::resource('authors', App\Http\Controllers\Admin\AuthorsController::class)->names([
            'index' => 'admin.authors',
            'create' => 'admin.author.create',
            'store' => 'admin.author.store',
            'destroy' => 'admin.author.delete',
            'edit' => 'admin.author.edit',
            'update' => 'admin.author.update'
        ]);
    });

});
