<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('form', [UserDataController::class, 'create'])->name('form.create');

Route::get('user/show', [UserDataController::class, 'show'])->name('user.show');

Route::get('user/view/{user}', [UserDataController::class, 'view'])->name('user.view');

