<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/', [LoginController::class, 'loginPage'])->name('login');
    Route::post('/post-request-login', [LoginController::class, 'postRequestLogin'])->name('post-request-login');

});


Route::middleware('auth')->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // ========================= MASTER DATA =========================
    Route::get('/get-all-data-profile', [MasterDataController::class, 'getAllDataProfile'])->name('get-all-data-profile');
    Route::get('/get-all-data-menu', [MasterDataController::class, 'getAllDataMenu'])->name('get-all-data-menu');

    // ========================= MASTER USER =========================
    Route::get('/master_data/user', [UserController::class, 'MasterUserPage'])->name('/master_data/user');
    Route::get('/get-user-list-datatable', [UserController::class, 'getUserListDatatable'])->name('get-user-list-datatable');

    // ========================= MASTER PROFILE =========================
    Route::get('/master_data/profile', [ProfileController::class, 'MasterProfilePage'])->name('/master_data/profile');
    Route::get('/get-profile-list-datatable', [ProfileController::class, 'getProfileListDatatable'])->name('get-profile-list-datatable');
    Route::post('/post-new-user', [UserController::class, 'postNewUser'])->name('post-new-user');
    Route::get('/get-old-data-of-user', [UserController::class, 'getOldDataOfUser'])->name('get-old-data-of-user');
    Route::post('/post-edit-user', [UserController::class, 'postEditUser'])->name('post-edit-user');
    Route::post('/post-reset-pw', [UserController::class, 'postResetPw'])->name('post-reset-pw');

});

require __DIR__.'/auth.php';
