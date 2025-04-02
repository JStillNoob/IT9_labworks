<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/form', [FormController::class, 'submit'])->name('form.submit');


Route::get('/homepage', function () {
    return view('homepage'); 
})->name('homepage');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
