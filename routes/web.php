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
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminTaskController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\UserBlogController;
use App\Http\Controllers\UserDashboardController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/code', [CodeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog/detail/{id}', [BlogController::class, 'detail']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
});


Route::group(['middleware' => ['auth']], function () {
    Route::post('/project', [ProjectController::class, 'store']);
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});




Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/home', [AdminBlogController::class, 'index']);

    Route::get('/admin/filemanager', [FileManagerController::class, 'index']);

    Route::prefix('/admin/blog')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index']);
        Route::get('/persetujuan', [AdminBlogController::class, 'persetujuan']);
        Route::post('/category', [CategoryBlogController::class, 'store']);
        Route::delete('/category/{id}', [CategoryBlogController::class, 'destroy']);
        Route::patch('/status/{id}', [AdminBlogController::class, 'status']);
        Route::get('/category', [CategoryBlogController::class, 'index']);
        Route::patch('/category/{id}', [CategoryBlogController::class, 'update']);
        Route::get('/create', [AdminBlogController::class, 'create']);
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit']);
        Route::get('/detail/{id}', [AdminBlogController::class, 'show']);
        Route::post('/', [AdminBlogController::class, 'store']);
        Route::patch('/{id}', [AdminBlogController::class, 'update']);
        Route::delete('/{id}', [AdminBlogController::class, 'destroy']);
    });

    Route::prefix('/admin/project')->group(function () {
        Route::get('/', [AdminProjectController::class, 'index']);
        Route::post('/', [AdminProjectController::class, 'store']);
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

    Route::prefix('/admin/task')->group(function () {
        Route::get('/', [AdminTaskController::class, 'index']);
        Route::get('/create', [AdminTaskController::class, 'create']);
        Route::get('/edit/{id}', [AdminTaskController::class, 'edit']);
        Route::get('/detail/{id}', [AdminTaskController::class, 'detail']);
        Route::post('/', [AdminTaskController::class, 'store']);
        Route::patch('/{id}', [AdminTaskController::class, 'update']);
        Route::delete('/{id}', [AdminTaskController::class, 'destroy']);
    });

    Route::prefix('/admin/setting')->group(function () {
        Route::get('/', [AdminSettingController::class, 'index']);
        Route::get('/edit/{id}', [AdminSettingController::class, 'edit']);
        Route::get('/detail/{id}', [AdminSettingController::class, 'detail']);
        Route::post('/', [AdminSettingController::class, 'store']);
        Route::patch('/{id}', [AdminSettingController::class, 'update']);
        Route::delete('/{id}', [AdminSettingController::class, 'destroy']);
    });
});

Route::group(['middleware' => 'user'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');


    Route::prefix('/user/blog')->group(function () {
        Route::get('/', [UserBlogController::class, 'index']);
        Route::post('/category', [CategoryBlogController::class, 'store']);
        Route::delete('/category/{id}', [CategoryBlogController::class, 'destroy']);
        Route::get('/category', [CategoryBlogController::class, 'index']);
        Route::get('/create', [UserBlogController::class, 'create']);
        Route::get('/edit/{id}', [UserBlogController::class, 'edit']);
        Route::get('/detail/{id}', [UserBlogController::class, 'detail']);
        Route::post('/', [UserBlogController::class, 'store']);
        Route::patch('/{id}', [UserBlogController::class, 'update']);
        Route::delete('/{id}', [UserBlogController::class, 'destroy']);
    });

    Route::prefix('/user/project')->group(function () {
        Route::get('/', [AdminProjectController::class, 'index']);
        Route::post('/', [AdminProjectController::class, 'store']);
        Route::get('/create', [AdminProjectController::class, 'create']);
        Route::get('/edit/{id}', [AdminProjectController::class, 'edit']);
        Route::get('/detail/{id}', [AdminProjectController::class, 'detail']);
        Route::post('/', [AdminProjectController::class, 'store']);
        Route::patch('/{id}', [AdminProjectController::class, 'update']);
        Route::delete('/{id}', [AdminProjectController::class, 'destroy']);
    });

    Route::prefix('/user/task')->group(function () {
        Route::get('/', [AdminTaskController::class, 'index']);
        Route::get('/create', [AdminTaskController::class, 'create']);
        Route::get('/edit/{id}', [AdminTaskController::class, 'edit']);
        Route::get('/detail/{id}', [AdminTaskController::class, 'detail']);
        Route::post('/', [AdminTaskController::class, 'store']);
        Route::patch('/{id}', [AdminTaskController::class, 'update']);
        Route::delete('/{id}', [AdminTaskController::class, 'destroy']);
    });
});
