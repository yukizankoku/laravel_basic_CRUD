<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\PortofolioPostController;

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
    return view('home', [
        "title" => "Home",

    ]);
});

Route::get('/service', function () {
    return view('service',[
        "title" => "Our Services",
    ]);
});

Route::get('/portofolio', [PortofolioPostController::class, 'index']);

Route::get('/portofolio/{post:slug}', [PortofolioPostController::class, 'show']);

Route::get('/portofolio/category/{category:slug}', [PortofolioPostController::class, 'cat']);

Route::get('/portofolio/user/{user:username}', [PortofolioPostController::class, 'user']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About Us",
    ]);
});

Route::get('/join', function () {
    return view('join',[
        "title" => "Join Us!",
    ]);
})->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        "title" => "Dashboard",
    ]);
})->middleware('agent');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('agent');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');

Route::resource('/dashboard/user', UserController::class)->except(['create', 'store'])->middleware('agent');

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');
});