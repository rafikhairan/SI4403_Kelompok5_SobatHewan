<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPetOwnersController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminVetsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VetDashboardController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'show']);

Route::get('/vet', function () {
    return view('petowner.vet');
});

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/myprofile', [ProfileController::class, 'index']);
Route::post('/myprofile', [ProfileController::class, 'update']);

Route::get('/dashboard', [AdminController::class, 'index']);

Route::resource('/dashboard/products', AdminProductsController::class)->except('show');

Route::get('/dashboard/orders', function () {
    return view('admin.orders');
});

Route::get('/dashboard/users', [AdminPetOwnersController::class, 'index']);

Route::get('/dashboard/vets', [AdminVetsController::class, 'index']);
Route::get('/dashboard/vets/create', [AdminVetsController::class, 'create']);
Route::post('/dashboard/vets', [AdminVetsController::class, 'store']);
Route::delete('/dashboard/vets/{vet:vet_id}', [AdminVetsController::class, 'destroy']);

Route::get('/vetdashboard', [VetDashboardController::class, 'index']);
Route::get('/vetdashboard/articles', [VetDashboardController::class, 'articles']);
Route::get('/vetdashboard/articles/create', [VetDashboardController::class, 'create']);
Route::post('/vetdashboard/articles', [VetDashboardController::class, 'store']);
Route::delete('/vetdashboard/articles/{article:slug}', [VetDashboardController::class, 'destroy']);