<?php

use App\Http\Controllers\Buku;
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
Route::get("/dashboard-admin", [User::class, 'indexAdmin'])->name("dashboardadmin");
Route::get("/dashboard-admin/{id}", [User::class, 'changeStatusUser'])->name("change.status.peminjaman");
Route::get("/dashboard-admin/{id}/disable", [User::class, 'changeStatusUserDisable'])->name("change.status.peminjaman.disable");
// Komplain

Route::get("/komplain", [Buku::class, 'komplain'])->name('komplain');

Route::post("/komplain/send", [Buku::class, 'sendKomplain'])->name('komplain.send');
Route::post("/peminjamanbuku", [Buku::class, 'sendPinjam'])->name('peminjamanbuku.send');
Route::delete("/peminjamanbuku/delete/{id}", [Buku::class, 'deletePinjam'])->name('peminjamanbuku.delete');


// export 

Route::get('user/export/', [Buku::class, 'export'])->name('user.export');