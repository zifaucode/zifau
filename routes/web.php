<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCodeController;
use App\Http\Controllers\AdminAboutController;




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


Route::group(['middleware' => ['guest']], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/project', [ProjectController::class, 'index']);
    Route::get('/code', [CodeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    Route::get('/login', [LoginController::class, 'index'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});




Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', [AdminController::class, 'index']);
    Route::prefix('/admin/blog')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index']);
        Route::post('/', [AdminBlogController::class, 'index']);
        Route::get('/create', [AdminBlogController::class, 'create']);
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit']);
        Route::get('/detail/{id}', [AdminBlogController::class, 'detail']);
        Route::post('/', [AdminBlogController::class, 'store']);
        Route::patch('/{id}', [AdminBlogController::class, 'update']);
        Route::delete('/{id}', [AdminBlogController::class, 'destroy']);
    });

    Route::prefix('/admin/project')->group(function () {
        Route::get('/', [AdminProjectController::class, 'index']);
        Route::get('/create', [AdminProjectController::class, 'create']);
        Route::get('/edit/{id}', [AdminProjectController::class, 'edit']);
        Route::get('/detail/{id}', [AdminProjectController::class, 'detail']);
        Route::post('/', [AdminProjectController::class, 'store']);
        Route::patch('/{id}', [AdminProjectController::class, 'update']);
        Route::delete('/{id}', [AdminProjectController::class, 'destroy']);
    });

    Route::prefix('/admin/code')->group(function () {
        Route::get('/', [AdminCodeController::class, 'index']);
        Route::get('/create', [AdminCodeController::class, 'create']);
        Route::get('/edit/{id}', [AdminCodeController::class, 'edit']);
        Route::get('/detail/{id}', [AdminCodeController::class, 'detail']);
        Route::post('/', [AdminCodeController::class, 'store']);
        Route::patch('/{id}', [AdminCodeController::class, 'update']);
        Route::delete('/{id}', [AdminCodeController::class, 'destroy']);
    });


    Route::prefix('/admin/about')->group(function () {
        Route::get('/', [AdminAboutController::class, 'index']);
        Route::get('/create', [AdminAboutController::class, 'create']);
        Route::get('/edit/{id}', [AdminAboutController::class, 'edit']);
        Route::get('/detail/{id}', [AdminAboutController::class, 'detail']);
        Route::post('/', [AdminAboutController::class, 'store']);
        Route::patch('/{id}', [AdminAboutController::class, 'update']);
        Route::delete('/{id}', [AdminAboutController::class, 'destroy']);
    });
});
