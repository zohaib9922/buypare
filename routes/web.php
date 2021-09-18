<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SearchController;


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



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact-us',[PagesController::class,'index'])->name('contact');
Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::get('/products',[ProductsController::class,'index']);
Route::get('/product-detail',[ProductsController::class,'productDetail']);
// Route::get('search',[SearchController::class,'result']);


// Route::get('search', [SearchController::class, 'index'])->name('search');
// Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');

Route::get('/autocomplete',[SearchController::class, 'index'])->name('autocomplete');
Route::post('/autocomplete/fetch',[SearchController::class, 'fetch'])->name('autocomplete.fetch');

