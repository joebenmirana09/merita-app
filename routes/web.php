<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('save-login', [UserController::class, 'check']);
Route::post('/save-register', [PatientController::class, 'save_register']);

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/dashboard', [AdminController::class, 'view_dashboard']);
    Route::view('/progress-patient-info', 'progress-info');
    Route::get('/logout', [UserController::class, 'logout']);
});