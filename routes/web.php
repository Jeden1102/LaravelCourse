<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\welcomeController;
use App\Models\User;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//users
Route::get("/users/List",[UserController::class,'index'])->middleware('auth');
Route::delete("/users/{id}",[UserController::class,'destroy'])->middleware('auth');

//products

Route::get("/products",[ProductController::class,'index'])->name('products.index')->middleware('auth');
//tworzenie -> widok
Route::get("/products/create",[ProductController::class,'create'])->name('products.create')->middleware('auth');
//tworzenie -> plecy
Route::post("/products",[ProductController::class,'store'])->name('products.store')->middleware('auth');
//edycja ->widok
Route::get("/products/edit/{product}",[ProductController::class,'edit'])->name('products.edit')->middleware('auth');
//edycja->plecy
Route::post("/products/{product}",[ProductController::class,'update'])->name('products.update')->middleware('auth');
Route::delete("/products/{product}",[ProductController::class,'destroy'])->name('products.destroy')->middleware('auth');
//pokaz pordukt
Route::get("/products/{product}",[ProductController::class,'show'])->name('products.show')->middleware('auth');

//strona główna
Route::get("/",[welcomeController::class,'index']);
