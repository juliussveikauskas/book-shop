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
    Route::post('admin/login', [App\Http\Controllers\Admin\AdminController::class, 'postLogin'])->name('admin.post-login');
    Route::get('admin/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth.admin'], function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    });


});
