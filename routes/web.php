<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [FormController::class, 'index']);
Route::post('/form-submit', [FormController::class, 'formSubmit'])->name('form-submit');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);


//redirect /home to /dashboard. Status is 302 "temporay" redirect.
Route::get('/home', function () {return redirect('/dashboard');});