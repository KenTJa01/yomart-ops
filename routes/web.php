<?php

use App\Http\Controllers\BakeryController;
use App\Http\Controllers\CookFoodController;
use App\Http\Controllers\DataBanController;
use App\Http\Controllers\DataObjekController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\FreshController;
use App\Http\Controllers\JenisBiayaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PengajuanObjekController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\DependentDropdownController;
use App\Models\Pengajuan_lokasi;
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
    Route::get('/get-all-data-sub-menu', [MasterDataController::class, 'getAllDataSubMenu'])->name('get-all-data-sub-menu');
    Route::get('/get-all-data-permission', [MasterDataController::class, 'getAllDataPermission'])->name('get-all-data-permission');

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
    Route::get('/get-old-data-of-profile', [ProfileController::class, 'getOldDataOfProfile'])->name('get-old-data-of-profile');
    Route::get('/get-profile-permission-by-id', [ProfileController::class, 'getProfilePermissionById'])->name('get-profile-permission-by-id');
    Route::get('/get-profile-menu-by-id', [ProfileController::class, 'getProfileMenuById'])->name('get-profile-menu-by-id');

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
    Route::get('/master_data/jenis_biaya', [JenisBiayaController::class, 'MasterJenisBiayaPage'])->name('/master_data/jenis_biaya');
    Route::get('/get-jenis-biaya-list-datatable', [JenisBiayaController::class, 'getJenisBiayaListDatatable'])->name('get-jenis-biaya-list-datatable');
    Route::post('/post-new-jenis-biaya', [JenisBiayaController::class, 'postNewJenisBiaya'])->name('post-new-jenis-biaya');
    Route::get('/get-old-data-of-jenis-biaya', [JenisBiayaController::class, 'getOldDataOfJenisBiaya'])->name('get-old-data-of-jenis-biaya');
    Route::post('/post-edit-jenis-biaya', [JenisBiayaController::class, 'postEditJenisBiaya'])->name('post-edit-jenis-biaya');

    // ========================= MASTER PRODUK =========================
    Route::get('/master_data/produk', [ProdukController::class, 'MasterProdukPage'])->name('/master_data/produk');
    Route::get('/get-produk-list-datatable', [ProdukController::class, 'getProdukListDatatable'])->name('get-produk-list-datatable');
    Route::post('/post-new-produk', [ProdukController::class, 'postNewProduk'])->name('post-new-produk');
    Route::get('/get-old-data-of-produk', [ProdukController::class, 'getOldDataOfProduk'])->name('get-old-data-of-produk');
    Route::post('/post-edit-produk', [ProdukController::class, 'postEditProduk'])->name('post-edit-produk');

    // ========================= MASTER VENDOR =========================
    Route::get('/master_data/vendor', [VendorController::class, 'MasterVendorPage'])->name('/master_data/vendor');
    Route::get('/get-vendor-list-datatable', [VendorController::class, 'getVendorListDatatable'])->name('get-vendor-list-datatable');
    Route::post('/post-new-vendor', [VendorController::class, 'postNewVendor'])->name('post-new-vendor');
    Route::get('/get-old-data-of-vendor', [VendorController::class, 'getOldDataOfVendor'])->name('get-old-data-of-vendor');
    Route::post('/post-edit-vendor', [VendorController::class, 'postEditVendor'])->name('post-edit-vendor');


    // ========================= PENGAJUAN OBJEK =========================
    Route::get('/kelola_lokasi/pengajuan_objek', [PengajuanObjekController::class, 'PengajuanObjekPage'])->name('/kelola_lokasi/pengajuan_objek');
    Route::get('/get-pengajuan-objek-list-datatable', [PengajuanObjekController::class, 'getPengajuanObjekListDatatable'])->name('get-pengajuan-objek-list-datatable');
    Route::post('/post-new-pengajuan-objek', [PengajuanObjekController::class, 'postNewPengajuanObjek'])->name('post-new-pengajuan-objek');

    Route::get('provinces', [DependentDropdownController::class,'provinces'])->name('provinces');
    Route::get('cities', [DependentDropdownController::class,'cities'])->name('cities');
    Route::get('districts', [DependentDropdownController::class,'districts'])->name('districts');
    Route::get('villages', [DependentDropdownController::class,'villages'])->name('villages');

    Route::post('/pengajuan-lokasi/store', [PengajuanObjekController::class, 'store'])
    ->name('pengajuan-lokasi.store');

    // Route::post('/pengajuan/upload-attachments', [PengajuanObjekController::class, 'upload'])
    // ->name('pengajuan.upload.attachments');

    // ========================= DATA OBJEK =========================
    Route::get('/kelola_lokasi/data_objek', [DataObjekController::class, 'dataObjekPage'])->name('/kelola_lokasi/data_objek');

    // ========================= DATA BAN =========================
    Route::get('/kelola_lokasi/list_data_ban', [DataBanController::class, 'listDataBanPage'])->name('/kelola_lokasi/list_data_ban');
    Route::get('/kelola_lokasi/form_data_ban', [DataBanController::class, 'formDataBanPage'])->name('/kelola_lokasi/form_data_ban');

});

require __DIR__.'/auth.php';
