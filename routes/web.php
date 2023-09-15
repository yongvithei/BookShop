<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Backend\CategoryController;

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
Route::get('/locale/{locale}', [LocalizationController::class, 'setLang']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//google redirect and callback
Route::get('/auth/{provider}/redirect/{role}', [SocialiteController::class,'redirect']);
Route::get('/auth/{provider}/callback/', [SocialiteController::class,'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    // Category All Route
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category', 'index')->name('all.category');
        Route::post('category/store', 'store');
        Route::post('category/edit', 'edit');
        Route::post('category/delete', 'destroy');
    });

    // Example Routes
    Route::view('/all/subcategory', 'backend/subcategory.subcategory');
    Route::view('/list/partners', 'backend/partner.partner');
    Route::view('/list/promo', 'backend/promo.promo');
    Route::view('/info/business', 'backend/system.business');
    Route::view('/backup/info', 'backend/system.backup');
    Route::view('/admin/profile', 'backend/profile.profile');
    Route::view('/product/all', 'backend/product.all_product');
    Route::view('/product/add', 'backend/product.add_product');
    Route::view('/user/list', 'backend/user.user');
    Route::view('/order/list', 'backend/order.order');
    Route::view('/return/pending', 'backend/return.pending');
    Route::view('/return/approve', 'backend/return.approve');
    Route::view('/report/order', 'backend/report.report_order');
    Route::view('/review/all', 'backend/review.review');
    Route::view('/role/permission', 'backend/role.role&permission');
    Route::view('/role/add_permission&role', 'backend/role.addrole&perm');
    Route::view('/assign/role', 'backend/role.assign');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);

require __DIR__.'/auth.php';
