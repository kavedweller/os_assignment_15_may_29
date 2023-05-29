<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

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
// Task-8 route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [FormController::class, 'index']);
Route::post('/form-submit', [FormController::class, 'formSubmit'])->name('form-submit');

//Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);


Route::get('/login', [UserController::class, 'index']);
Route::post('/form-submit', [UserController::class, 'formSubmit'])->name('login-form-submit');

// Route group for authenticated users
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/settings', [UserController::class, 'settings']);
});

//redirect /home to /dashboard. Status is 302 "temporay" redirect.
Route::get('/home', function () {
    return redirect('/dashboard');
});

// Task-6 routes
Route::get('/contact', ContactController::class);