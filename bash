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
php artisan make:model SubCategoryView -m
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
