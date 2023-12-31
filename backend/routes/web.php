<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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
Route :: get ('/', function () {
    return view ('welcome');
});



Route::middleware(['auth', 'role:gerente'])->group(function () { 
    Route::get("/usuarios", [UsersController::class, "index"])->name('usuarios.index');
    Route::post("/usuarios", [UsersController::class, "store"])->name('usuarios.store');
    Route::get("/usuarios/{id}", [UsersController::class, "show"])->name('usuarios.show');
    Route::put("/usuarios/{id}", [UsersController::class, "update"])->name('usuarios.update');
    Route::delete("/usuarios/{id}", [UsersController::class, "destroy"])->name('usuarios.destroy');
    Route::get("/usuarios/{id}", [UsersController::class, "edit"])->name('usuarios.edit');	
});  


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
