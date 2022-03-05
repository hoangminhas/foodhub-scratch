<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
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
    return view('backend.layout.master');
});

Route::middleware('checkAuth')->group(function () {

    //crud users
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

    //crud food
    Route::prefix('/food')->group(function () {
        //Show all food index
        Route::get('/', [FoodController::class, 'index'])->name('food.index');
        //Show detail food
        Route::get('/{id}/show', [FoodController::class, 'show'])->name('food.show');
        //Create new food
        Route::get('/create', [FoodController::class, 'create'])->name('food.create');
        Route::post('/create', [FoodController::class, 'store'])->name('food.store');
//        //Delete an food
        Route::get('/{id}/destroy', [FoodController::class, 'destroy'])->name('food.destroy');
//        //Update a food
        Route::get('/{id}/update', [FoodController::class, 'edit'])->name('food.edit');
        Route::put('/{id}/update', [FoodController::class, 'update'])->name('food.update');
    });

});


//Register
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('showFormRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('checkRegister');

//Login
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

//log out
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
