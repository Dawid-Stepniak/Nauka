<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('user_informations',[\App\Http\Controllers\UserInformations::class,'showUserInformations']);

Route::view('user_form','user.user_form');

Route::get('UserForm',[\App\Http\Controllers\UserForm::class,'showUser']);

Route::view('FormularzUzytkownika','user.FormularzUzytkownika');

Route::get('OpisUzytkownika',[\App\Http\Controllers\FormularzUzytkownikaController::class,'PrzekazanieDanych']);

Route::get('showtableusers',[\App\Http\Controllers\ShowTableUsersController::class,'index']);
