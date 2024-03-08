<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//product routes
Route::resource('products', ProductController::class);

//cart routes
Route::middleware('auth')->group(function () {
//fungsi untuk masukkin cart
    Route::post('/cart/addToCart',[CartController::class,'addToCart'])->name('cart.add');
//fungsi untuk ngelihat semua cart yang dimiliki user
    Route::get('/cart',[CartController::class,'cartIndex'])->name('cart.index');
});

require __DIR__.'/auth.php';
