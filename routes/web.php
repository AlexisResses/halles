<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
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

Route::get('/',[MainController::class, 'home']);
Route::get('/localisation',[MainController::class, 'location'])->name('location');


Route::get('/contact',[ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ContactController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/contact/{id}', [ContactController::class, 'show'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->delete('/delete/{id}', [ContactController::class, 'destroy'])->name('delete');


