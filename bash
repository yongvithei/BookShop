php artisan make:controller AdminController
php artisan make:middleware Role

composer require laravel/socialite
php artisan make:controller Auth/SocialiteController

composer require barryvdh/laravel-debugbar --dev
php artisan make:controller AdminController
php artisan make:model Category -m
php artisan make:controller Backend/CategoryController
php artisan make:controller LocalizationController
php artisan make:middleware LocalizationMiddleware

php artisan vendor:publish --tag=datatables

composer require yajra/laravel-datatables-oracle:"^10.3.1"
https://yajrabox.com/docs/laravel-datatables/10.0/installation

php artisan make:controller Backend/SubCategoryController
php artisan make:model SubCategory -m
php artisan make:migration create_subcategory_view
php artisan make:model SubCategoryView
php artisan make:controller Backend/PartnerController
php artisan make:model Partner -m
php artisan storage:link //developer
php artisan make:seeder UsersTableSeeder
php artisan make:factory UserFactory
php artisan migrate:fresh
php artisan db:seed --class=UsersTableSeeder
php artisan make:model Product -m
php artisan make:model TempImage -m
php artisan make:model ProductImage -m
php composer.phar require intervention/image
php artisan make:controller Backend/Product
php artisan make:controller Backend/ProductController
php artisan make:controller Backend/ProductImageController
php artisan make:controller Backend/TempImageController
php artisan make:migration create_product_view
php artisan make:model ProductView
php artisan make:model Slider -m
php artisan make:controller Backend/SliderController
php artisan make:model Coupon -m
php artisan make:controller Backend/CouponController
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

php artisan make:seeder RolesAndPermissionsSeeder
php artisan db:seed --class=RolesAndPermissionsSeeder

php artisan make:controller Backend/RoleController

php artisan make:migration create_admin_view
php artisan make:model AdminView

php artisan make:model SiteInfo -m
php artisan make:controller Backend/SiteInfoController

;extension=zip => extension=zip
composer require spatie/laravel-backup
php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"

composer require anayarojo/shoppingcart
php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"
php artisan make:controller Frontend/IndexController
php artisan make:controller Frontend/CartController
php artisan make:controller User/WishlistController
php artisan make:model Wishlist -m
php artisan make:model ShipCity -m
php artisan make:model ShipDistrict -m
php artisan make:controller Backend/CityController
php artisan make:controller Backend/DistrictController
php artisan make:controller User/CheckoutController

https://dashboard.stripe.com/test/apikeys //get api key
https://stripe.com/docs/development/quickstart //installation
https://stripe.com/docs/payments/accept-a-payment-charges //setup
https://stripe.com/docs/testing //testing

php artisan make:controller User/StripeController
php artisan make:model Order -m
php artisan make:model OrderItem -m
php artisan make:controller User/UserProfileController
composer require barryvdh/laravel-dompdf

php artisan make:migration create_order_view
php artisan make:model OrderView
php artisan make:migration create_order_item_view
php artisan make:model OrderItemView
php artisan make:controller Backend/ReportController
php artisan make:model Review -m
php artisan make:controller User/ReviewController
php artisan make:migration create_review_view
php artisan make:model ReviewView
php artisan notifications:table
php artisan migrate
php artisan make:notification OrderComplete
php artisan make:notification RegisterUser
php artisan make:controller Frontend/ShopController
npm install react react-dom
php artisan make:model Customer -m
php artisan make:controller Backend/CustomerController
extension=gd
php artisan make:resource ProductResource
php artisan make:migration create_pos_cart_table
php artisan make:controller PosCartController
php artisan make:model PosOrder -m
php artisan make:controller Backend/PosOrderController
php artisan make:model PosOrderItem -m
php artisan make:request OrderStoreRequest
