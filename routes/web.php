<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductImageController;
use App\Http\Controllers\Backend\TempImageController;
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
    // SubCategory All Route
    Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/all/subcategory', 'index')->name('all.sub');
        Route::post('sub/store', 'store');
        Route::post('sub/edit', 'edit');
        Route::post('sub/delete', 'destroy');
        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    });

    Route::controller(PartnerController::class)->group(function(){
        Route::get('/list/partners', 'index')->name('all.partner');
        Route::post('par/store', 'store');
        Route::post('par/edit', 'edit');
        Route::post('par/delete', 'destroy');
    });
    //Product All Route
    Route::controller(ProductController::class)->group(function(){
        Route::get('/product/all', 'index')->name('pro.index');;
        Route::post('product/delete', 'destroy');
        Route::get('/product/{product}/edit','edit')->name('pro.edit');
        Route::post('/product/{product}','update')->name('pro.update');
        Route::get('/product/add','create')->name('pro.create');
        Route::post('/product','store')->name('pro.store');
    });
    //product image route
        Route::post('/temp-images',[TempImageController::class,'store'])->name('temp-images.create');
        Route::post('/product-images',[ProductImageController::class,'store'])->name('product-images.store');
        Route::delete('/product-images/{image}',[ProductImageController::class,'destroy'])->name('product-images.delete');
       // Example Routes
    Route::view('/list/promo', 'backend/promo.promo');
    Route::view('/info/business', 'backend/system.business');
    Route::view('/backup/info', 'backend/system.backup');
    Route::view('/admin/profile', 'backend/profile.profile');
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
