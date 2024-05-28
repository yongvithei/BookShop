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
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DistController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\PosCartController;
use App\Http\Controllers\Backend\PosOrderController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\Backend\ReportController;
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
        Route::get('/pos/products', 'allProduct');

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
        Route::get('/info/business', 'show')->middleware('can:site.menu');
        Route::post('/sitePush','store')->name('sitePush');
        Route::get('/site/rates', 'rate');

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
    // Shipping All Route
    Route::controller(CityController::class)->group(function(){
        Route::get('/shipping/area', 'index')->name('all.city');
        Route::post('city/store', 'store');
        Route::post('city/edit', 'edit');
        Route::post('city/delete', 'destroy');
    });

    // SubCategory All Route
    Route::controller(DistController::class)->group(function(){
        Route::get('/all/dist', 'index')->name('all.dist');
        Route::post('dist/store', 'store');
        Route::post('dist/edit', 'edit');
        Route::post('dist/delete', 'destroy');
    });

    //Profile All Route

    Route::controller(AdminController::class)->group(function(){
         });
    Route::controller(OrderController::class)->group(function(){
        Route::get('/order/list', 'index')->name('all.order')->middleware('can:order.menu');
        Route::post('order/detail', 'viewDetail');
        Route::post('/get-order-item', 'getOrderItem')->name('order.items');
        Route::post('order/cancelled', 'cancelled');
        Route::post('order/edit', 'editOrder');
        Route::get('confirm/list', 'indexconfirm')->name('confirm.order');
        Route::get('pending/list', 'indexpending')->name('pending.order');
        Route::get('delivery/list', 'indexdelivery')->name('delivery.order');
        Route::get('delivered/list', 'indexdelivered')->name('delivered.order');
        Route::get('cancelled/list', 'indexcancelled')->name('cancelled.order');
        Route::post('order/update', 'update')->name('order.update');

    });
     // Report All Route
    Route::view('/report/order', 'backend/report.report_order');
    Route::view('/search/by/name', 'backend/report.by_name');
    Route::controller(ReportController::class)->group(function(){


        Route::get('/report/view' , 'ReportView')->name('report.view');

        Route::get('/search/by/year' , 'SearchByYear')->name('search-by-year');
        Route::get('/search/by/month' , 'SearchByMonth')->name('search-by-month');
        Route::get('/admin/invoice_download/{order_id}' , 'OrderInvoice');
        Route::get('/search/name' , 'GetSearchByName')->name('by-name');
        Route::get('/search/by/date' , 'SearchByDate')->name('search-by-date');

        Route::get('/by/date' , 'GetSearchByDate')->name('by-date');
    });

//    Route::group(function () {
//        Route::get('/report/view', [ReportController::class, 'ReportView'])->name('report.view');
//
//        Route::get('/search/by/year', [ReportController::class, 'SearchByYear'])->name('search-by-year');
//        Route::post('/search/by/month', [ReportController::class, 'SearchByMonth'])->name('search-by-month');
//        Route::get('/search/by/date', [ReportController::class, 'GetSearchByDate'])->name('by-date');
//        Route::get('/admin/invoice_download/{order_id}', [ReportController::class, 'OrderInvoice']);
//        Route::get('/search/by/name', [ReportController::class, 'GetSearchByName'])->name('by-name');
//        Route::get('/search/by/date', [ReportController::class, 'SearchByDate'])->name('search-by-date');
//    });

    // Admin Review All Route
    Route::controller(ReviewController::class)->group(function(){
        Route::get('review/list', 'index')->name('all.review');
        Route::get('approve/list', 'indexapprove')->name('all.approve');
        Route::post('review/delete', 'destroy');
        Route::post('review/approve', 'approve');
        Route::post('review/revoke', 'revoke');
    });
    Route::view('/review/all', 'backend/review.review')->middleware('can:review.menu');

    Route::view('/admin/pos', 'backend/pos/pos');

    Route::view('/pos/customer', 'backend/pos/customer');
    Route::controller(CustomerController::class)->group(function(){
        Route::get('/list/customer', 'index')->name('all.customer');
        Route::post('cus/store', 'store');
        Route::post('cus/edit', 'edit');
        Route::post('cus/delete', 'destroy');
        Route::get('/pos/customers', 'allCustommer');

    });

    Route::view('/pos/order', 'backend/pos/order');
    Route::view('/pos/dashboard', 'backend/pos/dashboard');
    Route::post('/get-sales-data', [PosOrderController::class, 'getSalesData']);
    Route::post('/get-ecm-data', [AdminController::class, 'getSalesECM']);
    //POS Cart
    Route::controller(PosCartController::class)->group(function(){
        Route::get('/pos/cart', 'index')->name('cart.index');
        Route::post('/pos/cart', 'store')->name('cart.store');
        Route::delete('/pos/cart/delete', 'delete');
        Route::delete('/pos/cart/empty', 'empty');
        Route::post('/pos/cart/change-qty', 'changeQty');

    });
    Route::controller(PosOrderController::class)->group(function(){
        Route::get('/pos/allorder', 'indexOrder')->name('order.index');
        Route::get('/pos/recent-order', 'index');
        Route::post('/pos/orders', 'store');
        Route::get('/pos/invoice_download/{order_id}' , 'OrderInvoice');
        Route::get('/pos/invoice_preview/{order_id}' ,'PreviewOrderInvoice');
    });



});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);

//end admin route

    Route::get('/', [IndexController::class, 'index']);
    Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
    Route::get('/product/category/{id}/{slug}', [IndexController::class, 'CatWiseProduct']);
    Route::get('/product/subcategory/{id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);
    // Product View Modal With Ajax
    Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);
    // Search All Route
    Route::controller(IndexController::class)->group(function(){
        Route::post('/search' , 'ProductSearch')->name('product.search');
        Route::post('/search-product' , 'SearchProduct');
    });
    Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);
    // Get Data from mini Cart
    Route::get('/product/mini/cart', [CartController::class, 'AddMiniCart']);
    Route::get('/minicart/product/remove/{rowId}', [CartController::class, 'RemoveMiniCart']);
    /// Add to cart store data For Product Details Page
    Route::post('/dcart/data/store/{id}', [CartController::class, 'AddToCartDetails']);
    /// Add to Wishlist
    Route::post('/addWishlist/{product_id}', [WishlistController::class, 'AddToWishList']);
    Route::get('/user/invoice_stream/{invoice_no}',[UserProfileController::class , 'PreviewUserInvoice']);

    /// User All Route
    Route::middleware(['auth','role:user'])->group(function() {
        // Review All Route
        Route::controller(ReviewController::class)->group(function(){
            Route::post('/store/review' , 'StoreReview')->name('store.review');
            Route::delete('/comment/{id}' , 'delete')->name('delete.comment');
        });
        // Wishlist All Route
        Route::controller(WishlistController::class)->group(function(){
            Route::view('/wishlist', 'frontend.wishlist.wishlist');
            Route::get('/get-wishlist-product' , 'GetWishlistProduct');
            Route::get('/wishlist-remove/{id}' , 'WishlistRemove');
        });
        // Cart All Route
        Route::controller(CartController::class)->group(function(){
            Route::get('/mycart' , 'MyCart')->name('mycart');
            Route::get('/get-cart-product' , 'GetCartProduct');
            Route::get('/cart-remove/{rowId}' , 'CartRemove');
            Route::get('/cart-decrement/{rowId}' , 'CartDecrement');
            Route::get('/cart-increment/{rowId}' , 'CartIncrement');
            Route::post('/update-quantity/{rowId}' , 'updateQuantity')->name('update-quantity');
            /// Frontend Coupon Option
            Route::post('/coupon-apply', 'CouponApply');
            Route::get('/coupon-calculation','CouponCalculation');
            Route::get('/coupon-remove', 'CouponRemove');
        });
        Route::controller(CheckoutController::class)->group(function(){
            Route::get('/district-get/ajax/{division_id}' , 'DistrictGetAjax');
            Route::post('/checkout/store' , 'CheckoutStore')->name('checkout.store');

        });

        // Checkout Page Route
        Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

         // Stripe All Route
        Route::controller(StripeController::class)->group(function(){
            Route::post('/stripe/order' , 'StripeOrder')->name('stripe.order');
            Route::post('/cash/order' , 'CashOrder')->name('cash.order');
        });
        // User Profile All Route
        Route::controller(UserProfileController::class)->group(function(){
            Route::get('/user/account/details', 'editProfile')->name('user.profile');
            Route::post('/user/account/store', 'updateProfile')->name('user.profile.store');
            Route::get('/user/orderlist' , 'UserOrderPage')->name('user.order.page');
            Route::get('/user/order_details/{order_id}' , 'UserOrderDetails');
            Route::get('/user/invoice_download/{order_id}' , 'UserOrderInvoice');
            Route::post('/order/tracking' , 'OrderTracking')->name('order.tracking');
        });
        Route::view('/user/track-order', 'frontend/dashboard/track_order');
        Route::view('/user/account/password', 'frontend/dashboard/password');
        Route::view('/complete', 'frontend/complete/complete')->name('order.complete');

    });

    Route::controller(ShopController::class)->group(function () {
        Route::get('/shop', 'ShopPage')->name('shop.page');
        Route::get('/shop/feature', 'ShopFeature')->name('shop.feature');
        Route::get('/shop/new', 'ShopNew')->name('shop.new');
        Route::post('/shop/filter', 'ShopFilter')->name('shop.filter');
    });




    //Route::view('/shoplist', 'frontend/product/shop_list');
    // Route::view('/invoice', 'frontend/dashboard/order_invoice');
    //Route::view('/search', 'frontend/product/search');
    // Route::view('/product_detail', 'frontend/product/product_detail');
    // Route::view('/cart', 'frontend/mycart/view_mycart');
    // Route::view('/checkOut', 'frontend/checkout/checkout_view');
    // Route::view('/payment', 'frontend/payment/stripe');
   // Route::view('/order/tracking', 'frontend/tracking/tracking_order');
    Route::view('/user/dashboard', 'frontend/dashboard/dashboard');

    // Route::view('/user/orderlist', 'frontend/dashboard/order');
    // Route::view('/user/address', 'frontend/dashboard/address');
//    Route::view('/user/account/details', 'frontend/dashboard/account_details');

    //already
    Route::view('/contact', 'frontend/about/contact');
    Route::view('/about', 'frontend/about/about');
require __DIR__.'/auth.php';
