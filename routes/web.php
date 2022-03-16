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
Route::view('/verify-message', 'verification-message');
Route::get('/verify-email', [PatientController::class, 'verify']);

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/dashboard', [AdminController::class, 'view_dashboard']);
    Route::get('/progress-patient-info', [
        PatientController::class,
        'progress_info',
    ]);
    Route::get('/edit-patient-info', [
        PatientController::class,
        'edit_patient_info',
    ]);
    Route::post('/update-patient-info', [
        PatientController::class,
        'update_patient_info',
    ]);
    Route::post('/save-info', [PatientController::class, 'add_other_details']);
    Route::get('/logout', [UserController::class, 'logout']);
});