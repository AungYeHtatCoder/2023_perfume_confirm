<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ScentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Customer\WelcomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\BrandCategoryController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Customer\CustomerProductShowController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);
    // profile resource rotues
    Route::resource('profiles', ProfileController::class);
    //Route::post('/profiles/update/', [ProfileController::class, 'profileChange']);
    // brand_categories resource rotues
    Route::resource('brand_categories', BrandCategoryController::class);
    // Brands resource rotues
    Route::resource('brands', BrandController::class);

    // PerfumeSize resource rotues
    Route::resource('sizes', SizeController::class);
    // Scent resource rotues
    Route::resource('scents', ScentController::class);

    // Product resource rotues
    Route::resource('products', ProductController::class);
});

// Customer Routes goes here
    Route::get('/', [WelcomeController::class, 'index'])->name('home');
    Route::get('/checkout', [WelcomeController::class, 'checkout']);
    Route::get('/cart', [WelcomeController::class, 'cart']);
    Route::get('/shop', [WelcomeController::class, 'shop']);
    Route::get('/contact', [WelcomeController::class, 'contact']);
    Route::get('/aboutus', [WelcomeController::class, 'aboutus']);
    Route::get('/product_detail', [WelcomeController::class, 'product_detail']);
    Route::get('/signin', [WelcomeController::class, 'signin']);
    Route::get('/signup', [WelcomeController::class, 'signup']);
    Route::get('/lost-password', [WelcomeController::class, 'lost_password']);
    Route::get('/product_detail{id}', [WelcomeController::class, 'product_detail']);
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart']);

    // customer auth routes goes here
    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\Customer', 'middleware' => ['auth']], function () {
        // Other Customer routes Add Here
        Route::get('customer-show-product', [CustomerProductShowController::class, 'index'])->name('customer-show-product');

    });
