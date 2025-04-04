<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\View\Components\Administrador;
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

Route::get("/user", [HomeController::class, 'index'])->name('user.index');

Route::get('/login', [loginController::class, 'Login'])->name('user.login');

Route::get('/admin', [AdminController::class, 'AdminPanel'])->name('user.admin');




Route::get('/', function () {
    return view('Login.login');
});
