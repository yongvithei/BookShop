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

php artisan make:controller Frontend/IndexController
php artisan make:controller Frontend/CartController