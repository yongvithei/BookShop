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