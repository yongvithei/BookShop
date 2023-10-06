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
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\SiteInfoController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SystemController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\User\WishlistController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard')->middleware('can:dashboard.menu');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    // Category All Route
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category', 'index')->name('all.category')->middleware('can:category.menu');
        Route::post('category/store', 'store');
        Route::post('category/edit', 'edit');
        Route::post('category/delete', 'destroy');
    });
    // SubCategory All Route
    Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/all/subcategory', 'index')->name('all.sub')->middleware('can:category.menu');
        Route::post('sub/store', 'store');
        Route::post('sub/edit', 'edit');
        Route::post('sub/delete', 'destroy');
        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    });

    Route::controller(PartnerController::class)->group(function(){
        Route::get('/list/partners', 'index')->name('all.partner')->middleware('can:business.menu');
        Route::post('par/store', 'store');
        Route::post('par/edit', 'edit');
        Route::post('par/delete', 'destroy');
    });
    //Product All Route
    Route::controller(ProductController::class)->group(function(){
        Route::get('/product/all', 'index')->name('pro.index')->middleware('can:product.menu');
        Route::post('product/delete', 'destroy');
        Route::get('/product/{product}/edit','edit')->name('pro.edit');
        Route::post('/product/{product}','update')->name('pro.update');
        Route::get('/product/add','create')->name('pro.create');
        Route::post('/product','store')->name('pro.store');
        Route::post('pro/view','view');
    });
    //product image route
        Route::post('/temp-images',[TempImageController::class,'store'])->name('temp-images.create');
        Route::post('/product-images',[ProductImageController::class,'store'])->name('product-images.store');
        Route::delete('/product-images/{image}',[ProductImageController::class,'destroy'])->name('product-images.delete');
    //All slider route
    Route::controller(SliderController::class)->group(function(){
        Route::get('/list/slider', 'index')->name('all.slider')->middleware('can:promo.menu');
        Route::post('sli/store', 'store');
        Route::post('sli/edit', 'edit');
        Route::post('sli/delete', 'destroy');
    });
    //All Coupon route
    Route::controller(CouponController::class)->group(function(){
        Route::get('/list/promo', 'index')->name('all.coupon')->middleware('can:promo.menu');
        Route::post('cou/store', 'store');
        Route::post('cou/edit', 'edit');
        Route::post('cou/delete', 'destroy');
    });

    // Role All Route
    Route::controller(RoleController::class)->group(function(){
        Route::get('/role/permission', 'index')->name('all.role')->middleware('can:role.menu');
        Route::post('role/store', 'store');
        Route::post('role/edit', 'edit');
        Route::post('role/delete', 'destroy');

    });
    // Permission All Route
    Route::controller(PermissionController::class)->group(function(){
        Route::get('/assign/permission', 'index')->name('all.per')->middleware('can:role.menu');
        Route::post('per/store', 'store');
        Route::post('per/edit', 'edit');
        // Route::post('role/delete', 'destroy');
    });

    // Add Admin All Route
    Route::controller(AdminController::class)->group(function(){
        Route::get('/list/admin', 'index')->name('all.admin')->middleware('can:assign.menu');
        Route::post('admin/store', 'store');
        Route::post('admin/edit', 'edit');
        Route::post('admin/delete', 'delete');

        Route::get('/admin/profile', 'editProfile')->name('admin.profile.sp');
        Route::post('/admin/profile/store', 'updateProfile')->name('admin.profile.store');
        Route::get('/admin/profile/password', 'editProfile')->name('admin.profile');
    });

    // Site Info All Route
    Route::controller(SiteInfoController::class)->group(function(){
        Route::view('/info/business', 'backend/system.business')->middleware('can:site.menu');
        Route::get('/info/web', 'show');
        Route::post('/sites',  'store');
        Route::put('/site/{item}','update');
    });
    // User Info All Route
    Route::controller(UserController::class)->group(function(){
        Route::get('/user/list', 'index')->name('all.user')->middleware('can:user.menu');
        Route::post('user/view', 'view');
    });
     // Backup All Route
    Route::view('/backup/info', 'backend/system.backup');
    Route::controller(SystemController::class)->group(function(){
        Route::get('/clear-cache', 'clearCache')->name('clear-cache');
        Route::get('/backup-all', 'backupall')->name('backupall');
        Route::get('/dbdumps', 'dbdumps')->name('dbdumps');
    });

    //Profile All Route

    Route::controller(AdminController::class)->group(function(){
         });


    // Example Routes
    Route::view('/order/list', 'backend/order.order');
    Route::view('/return/pending', 'backend/return.pending');
    Route::view('/return/approve', 'backend/return.approve');
    Route::view('/report/order', 'backend/report.report_order');
    Route::view('/review/all', 'backend/review.review');
    Route::view('/role/add_permission&role', 'backend/role.addrole&perm');
    Route::view('/assign/role', 'backend/role.assign');
    // Frontend Routes

});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
    Route::get('/product/category/{id}/{slug}', [IndexController::class, 'CatWiseProduct']);
    Route::get('/product/subcategory/{id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);
    // Product View Modal With Ajax
    Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);
    Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);
    // Get Data from mini Cart
    Route::get('/product/mini/cart', [CartController::class, 'AddMiniCart']);
    Route::get('/minicart/product/remove/{rowId}', [CartController::class, 'RemoveMiniCart']);
    /// Add to cart store data For Product Details Page 
    Route::post('/dcart/data/store/{id}', [CartController::class, 'AddToCartDetails']);
    /// Add to Wishlist 
    Route::post('/addWishlist/{product_id}', [WishlistController::class, 'AddToWishList']);

    /// User All Route
    Route::middleware(['auth','role:user'])->group(function() {
        // Wishlist All Route 
        Route::controller(WishlistController::class)->group(function(){
            Route::view('/wishlist', 'frontend.wishlist.wishlist');
            Route::get('/get-wishlist-product' , 'GetWishlistProduct');
            Route::get('/wishlist-remove/{id}' , 'WishlistRemove');
        }); 
    });

    
    Route::view('/shoplist', 'frontend/product/shop_list');
    Route::view('/search', 'frontend/product/search');
    // Route::view('/product_detail', 'frontend/product/product_detail');
    Route::view('/cart', 'frontend/mycart/view_mycart');
    Route::view('/checkOut', 'frontend/checkout/checkout_view');
    Route::view('/payment', 'frontend/payment/stripe');
    Route::view('/complete', 'frontend/complete/complete');
    Route::view('/order/tracking', 'frontend/tracking/tracking_order');
    Route::view('/user/dashboard', 'frontend/dashboard/dashboard');
    Route::view('/user/orderlist', 'frontend/dashboard/order');
    Route::view('/user/address', 'frontend/dashboard/address');
    Route::view('/user/account/details', 'frontend/dashboard/account_details');
    Route::view('/user/account/password', 'frontend/dashboard/password');
    Route::view('/contact', 'frontend/about/contact');
    Route::view('/about', 'frontend/about/about');
require __DIR__.'/auth.php';
