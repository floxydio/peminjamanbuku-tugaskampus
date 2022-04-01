<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\User;
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
    return view('welcome');
});
Route::get("/login", [Login::class, 'index'])->name("login");
Route::get("/logout", [Login::class, 'logout'])->name("logout");
Route::post("login/save", [Login::class, 'save'])->name("login.save");
Route::post("register/save", [Register::class, 'save'])->name("register.save");
Route::get("/register", function() {
    return view("auth/register");
})->name("register");

// Dashboard
Route::get("/dashboard", [User::class, 'index'])->name("dashboard");