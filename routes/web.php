<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;

use App\Http\Controllers\Front\SiteController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [SiteController::class, 'index'])->name('homepage');

Route::get('blog/{post:slug}', [SiteController::class, 'show'])->name('blog.show');
Route::resource('products', ProductController::class);
Route::resource('coupons', CouponController::class);

////admin//////////////
Route::prefix('admin')->middleware('auth','admin_or_user')->group(function(){
    Route::get('/', [DashbordController::class, 'index'])->name('dashboard')->middleware('admin');

    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);

});


