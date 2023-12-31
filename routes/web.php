<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ScentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Customer\WelcomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\BrandCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\AboutSectionController;
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

    Route::get('/orders/', [OrderController::class, 'index']); //show all orders
    Route::get('/orders/show/{id}', [OrderController::class, 'show']); //show order detail
    Route::post('/orders/delete/{id}', [OrderController::class, 'delete']); //delete order
    Route::get('/orders/{status}', [OrderController::class, 'status']); // show orders by status
    Route::post('/orders/statusChange/{id}', [OrderController::class, 'statusChange']); //status Change
    Route::get('/fetch-order-notifications', [App\Http\Controllers\Admin\OrderNotificationController::class, 'OrderfetchNotifications'])->name('orderfetchNotifications');
    Route::delete('/delete-notification/{id}', [App\Http\Controllers\Admin\OrderNotificationController::class, 'destroy'])->name('deleteNotification');

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-month', [AdminDashboardController::class, 'LineForMonth'])->name('dashboard-month');
    Route::get('/dashboard-day-month', [AdminDashboardController::class, 'DayForMonth'])->name('dashboard-day-month');
    Route::get('export', [App\Http\Controllers\Admin\OrderController::class, 'export'])->name('export');
    // get daimond user route
    Route::get('/diamond-user', [App\Http\Controllers\Admin\DiamondUserController::class, 'index'])->name('diamond-user');
    // get gold user route
    Route::get('/gold-user', [App\Http\Controllers\Admin\GoldUserController::class, 'index'])->name('gold-user');
    // get silver user route
    Route::get('/silver-user', [App\Http\Controllers\Admin\SilverUserController::class, 'index'])->name('silver-user');
    // log show route
    Route::get('/log', [App\Http\Controllers\Admin\LogController::class, 'showLog'])->name('log');


    //banner slide crud
    Route::get('/banners', [BannerController::class, 'index']);
    Route::get('/banners/create/', [BannerController::class, 'create']);
    Route::post('/banners/create/', [BannerController::class, 'store']);
    Route::get('/banners/show/{id}', [BannerController::class, 'show']);
    Route::get('/banners/edit/{id}', [BannerController::class, 'edit']);
    Route::post('/banners/edit/{id}', [BannerController::class, 'update']);
    Route::get('/banners/delete/{id}', [BannerController::class, 'delete']);

    //Home Sections  crud
    Route::get('/homesections', [HomeSectionController::class, 'index']);
    Route::get('/homesections/create/', [HomeSectionController::class, 'create']);
    Route::post('/homesections/create/', [HomeSectionController::class, 'store']);
    Route::post('/homesections/status/{id}', [HomeSectionController::class, 'status']);
    Route::get('/homesections/show/{id}', [HomeSectionController::class, 'show']);
    Route::get('/homesections/edit/{id}', [HomeSectionController::class, 'edit']);
    Route::post('/homesections/edit/{id}', [HomeSectionController::class, 'update']);
    Route::get('/homesections/delete/{id}', [HomeSectionController::class, 'delete']);

    //About Sections  crud
    Route::get('/aboutsections', [AboutSectionController::class, 'index']);
    Route::get('/aboutsections/create/', [AboutSectionController::class, 'create']);
    Route::post('/aboutsections/create/', [AboutSectionController::class, 'store']);
    Route::post('/aboutsections/one/{id}', [AboutSectionController::class, 'one']);
    Route::post('/aboutsections/two/{id}', [AboutSectionController::class, 'two']);
    Route::get('/aboutsections/show/{id}', [AboutSectionController::class, 'show']);
    Route::get('/aboutsections/edit/{id}', [AboutSectionController::class, 'edit']);
    Route::post('/aboutsections/edit/{id}', [AboutSectionController::class, 'update']);
    Route::get('/aboutsections/delete/{id}', [AboutSectionController::class, 'delete']);
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
    Route::get('/shop/scent/{id}', [WelcomeController::class, 'scent']);
    Route::get('/shop/size/{id}', [WelcomeController::class, 'size']);
    Route::get('/shop/brand/{id}', [WelcomeController::class, 'brand']);
    Route::get('/contact', [WelcomeController::class, 'contact']);
    Route::get('/aboutus', [WelcomeController::class, 'aboutus']);
    Route::get('/product_detail/{id}', [WelcomeController::class, 'product_detail']);
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
    Route::post('/order', [OrderController::class, 'store']);
    Route::post('/place-order/', [OrderController::class, 'placeOrder']);
    Route::get('/order-success/{id}', [OrderController::class, 'orderSuccess']);
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
