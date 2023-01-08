<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('petowner.home');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/article', function () {
    return view('petowner.article');
});

Route::get('/vet', function () {
    return view('petowner.vet');
});

Route::get('/shop', function () {
    return view('petowner.shop');
});

Route::get('/myprofile', [ProfileController::class, 'index']);
Route::post('/myprofile', [ProfileController::class, 'update']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard/products', function () {
    return view('admin.products');
});

Route::get('/dashboard/orders', function () {
    return view('admin.orders');
});

Route::get('/vetdashboard', function () {
    return view('vet.appointment');
});

Route::get('/vetdashboard/article', function () {
    return view('vet.article');
});

Route::get('/vetdashboard/article/create', function () {
    return view('vet.create');
});
