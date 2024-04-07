<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [AuthenticationController::class, 'registration'])->name('registration');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');
