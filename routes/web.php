<?php

use App\Http\Controllers\BakeryController;
use App\Http\Controllers\CookFoodController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\FreshController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\ProdukController;
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
    Route::post('/post-new-user', [UserController::class, 'postNewUser'])->name('post-new-user');
    Route::get('/get-old-data-of-user', [UserController::class, 'getOldDataOfUser'])->name('get-old-data-of-user');
    Route::post('/post-edit-user', [UserController::class, 'postEditUser'])->name('post-edit-user');
    Route::post('/post-reset-pw', [UserController::class, 'postResetPw'])->name('post-reset-pw');

    // ========================= MASTER PROFILE =========================
    Route::get('/master_data/profile', [ProfileController::class, 'MasterProfilePage'])->name('/master_data/profile');
    Route::get('/get-profile-list-datatable', [ProfileController::class, 'getProfileListDatatable'])->name('get-profile-list-datatable');
    Route::post('/post-new-profile', [ProfileController::class, 'postNewProfile'])->name('post-new-profile');

    // ========================= MASTER BAKERY =========================
    Route::get('/master_data/bakery', [BakeryController::class, 'MasterBakeryPage'])->name('/master_data/bakery');
    Route::get('/get-bakery-list-datatable', [BakeryController::class, 'getBakeryListDatatable'])->name('get-bakery-list-datatable');
    Route::post('/post-new-bakery', [BakeryController::class, 'postNewBakery'])->name('post-new-bakery');
    Route::get('/get-old-data-of-bakery', [BakeryController::class, 'getOldDataOfBakery'])->name('get-old-data-of-bakery');
    Route::post('/post-edit-bakery', [BakeryController::class, 'postEditBakery'])->name('post-edit-bakery');

    // ========================= MASTER COOK FOOD =========================
    Route::get('/master_data/cook_food', [CookFoodController::class, 'MasterCookFoodPage'])->name('/master_data/cook_food');
    Route::get('/get-cook-food-list-datatable', [CookFoodController::class, 'getCookFoodListDatatable'])->name('get-cook-food-list-datatable');
    Route::post('/post-new-cook-food', [CookFoodController::class, 'postNewCookFood'])->name('post-new-cook-food');
    Route::get('/get-old-data-of-cook-food', [CookFoodController::class, 'getOldDataOfCookFood'])->name('get-old-data-of-cook-food');
    Route::post('/post-edit-cook-food', [CookFoodController::class, 'postEditCookFood'])->name('post-edit-cook-food');

    // ========================= MASTER FASHION =========================
    Route::get('/master_data/fashion', [FashionController::class, 'MasterFashionPage'])->name('/master_data/fashion');
    Route::get('/get-fashion-list-datatable', [FashionController::class, 'getFashionListDatatable'])->name('get-fashion-list-datatable');
    Route::post('/post-new-fashion', [FashionController::class, 'postNewFashion'])->name('post-new-fashion');
    Route::get('/get-old-data-of-fashion', [FashionController::class, 'getOldDataOfFashion'])->name('get-old-data-of-fashion');
    Route::post('/post-edit-fashion', [FashionController::class, 'postEditFashion'])->name('post-edit-fashion');

    // ========================= MASTER FRESH =========================
    Route::get('/master_data/fresh', [FreshController::class, 'MasterFreshPage'])->name('/master_data/fresh');
    Route::get('/get-fresh-list-datatable', [FreshController::class, 'getFreshListDatatable'])->name('get-fresh-list-datatable');
    Route::post('/post-new-fresh', [FreshController::class, 'postNewFresh'])->name('post-new-fresh');
    Route::get('/get-old-data-of-fresh', [FreshController::class, 'getOldDataOfFresh'])->name('get-old-data-of-fresh');
    Route::post('/post-edit-fresh', [FreshController::class, 'postEditFresh'])->name('post-edit-fresh');

    // ========================= MASTER JENIS BIAYA =========================

    // ========================= MASTER PRODUK =========================
    Route::get('/master_data/produk', [ProdukController::class, 'MasterProdukPage'])->name('/master_data/produk');
    Route::get('/get-produk-list-datatable', [ProdukController::class, 'getProdukListDatatable'])->name('get-produk-list-datatable');

});

require __DIR__.'/auth.php';
