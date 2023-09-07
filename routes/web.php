<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CartController;
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
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\ProductBandSearchController;
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
    // change password route with auth id 
    Route::put('/change-password', [ProfileController::class, 'changePassword'])->name('changePassword');
    // PhoneAddressChange route with auth id route with put method
    Route::put('/change-phone-address', [ProfileController::class, 'PhoneAddressChange'])->name('changePhoneAddress');
    Route::resource('brand_categories', BrandCategoryController::class);
    // Brands resource rotues
    Route::resource('brands', BrandController::class);

    // PerfumeSize resource rotues
    Route::resource('sizes', SizeController::class);
    // Scent resource rotues
    Route::resource('scents', ScentController::class);

    // Product resource rotues
    Route::resource('products', ProductController::class);
     Route::get('customer-show-product', [CustomerProductShowController::class, 'index'])->name('customer-show-product');
});

//product popular change
 Route::post('/change-popular/{id}', [ProductController::class, 'changeProductPopular'])->name('changePopular');

 //product popular change
 Route::post('change-feature/{id}', [ProductController::class, 'changeFeature']);


// Customer Routes goes here
    Route::get('/', [WelcomeController::class, 'index'])->name('home');
    Route::get('/checkout', [WelcomeController::class, 'checkout']);
    Route::get('/cart', [WelcomeController::class, 'cart']);
    Route::get('/shop', [WelcomeController::class, 'shop']);
    Route::get('/contact', [WelcomeController::class, 'contact']);
    Route::get('/aboutus', [WelcomeController::class, 'aboutus']);
    Route::get('/product_detail', [WelcomeController::class, 'product_detail']);
    Route::get('/dashboard', [WelcomeController::class, 'dashboard']);
    Route::get('/profile', [WelcomeController::class, 'profile']);
    Route::get('/delivary-info', [WelcomeController::class, 'delivary_info']);
    Route::get('/track-order', [WelcomeController::class, 'track_order']);
    Route::get('/my-orders', [WelcomeController::class, 'user_orders']);
    Route::get('/my-payment', [WelcomeController::class, 'my_payment']);
    Route::get('/order-cancellation', [WelcomeController::class, 'order_cancellation']);
    //Route::get('/search-result', [WelcomeController::class, 'search_result']);
    Route::get('/signin', [WelcomeController::class, 'signin']);
    Route::get('/signup', [WelcomeController::class, 'signup']);
    Route::get('/lost-password', [WelcomeController::class, 'lost_password']);
    Route::get('/product_detail{id}', [WelcomeController::class, 'product_detail']);
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart']);
    Route::get('/cart/delete/{id}', [CartController::class, 'delete']);
    Route::post('/carts/all/update/{id}', [CartController::class, 'updateAllCarts']);
    Route::post('/carts/all/clear/', [CartController::class, 'clearAll']);
    // product brand search route @ProductBrandSearch method
    Route::post('/search', [ProductBandSearchController::class, 'globalSearch'])->name('search');
    // customer auth routes goes here
    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\Customer', 'middleware' => ['auth']], function () {
        // Other Customer routes Add Here
       
        // customer profile update route
    Route::put('/change-password', [CustomerProfileController::class, 'CustomerchangePassword'])->name('customerchangePassword');
    // PhoneAddressChange route with auth id route with put method
    Route::put('/change-phone-address', [CustomerProfileController::class, 'CustomerPhoneAddressChange'])->name('customerchangePhoneAddress');        
    });