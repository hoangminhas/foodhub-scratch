<?php

use App\Http\Controllers\UserController;
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

Route::prefix('/users')->group(function () {
    //Show all users index
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    //Show detail user
    Route::get('/{id}/show', [UserController::class, 'show'])->name('users.show');
    //Create new user
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/create', [UserController::class, 'store'])->name('users.store');
    //Delete an user
    Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    //Update a user
    Route::get('/{id}/update', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{id}/update', [UserController::class, 'update'])->name('users.update');

});
