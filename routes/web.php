<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//We Use this for redirecting guards routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Main Pages
Route::get('/', [App\Http\Controllers\Website\CustomerController::class, 'index']);
Route::post('/create-store', [App\Http\Controllers\Website\CustomerController::class, 'createStore'])->name('create-store');
Route::get('/landing-page', [App\Http\Controllers\Website\CustomerController::class, 'loandingHome'])->name('loanding-home');
Route::get('/create-store-page/{package_id?}', [App\Http\Controllers\Website\CustomerController::class, 'createStorePage'])->name('create-store-page');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home.index');

    /////////////////////////////////////////////
    Route::get('/roles', [App\Http\Controllers\AdminPanel\RolesController::class, 'index'])->name('admin.roles.index');
    Route::get('/roles/create', [App\Http\Controllers\AdminPanel\RolesController::class, 'create'])->name('admin.roles.create');
    Route::post('/roles/store', [App\Http\Controllers\AdminPanel\RolesController::class, 'store'])->name('admin.roles.store');
    Route::get('/roles/edit/{id}', [App\Http\Controllers\AdminPanel\RolesController::class, 'edit'])->name('admin.roles.edit');
    Route::post('/roles/update/{id}', [App\Http\Controllers\AdminPanel\RolesController::class, 'update'])->name('admin.roles.update');
    Route::get('/roles/delete/{id}', [App\Http\Controllers\AdminPanel\RolesController::class, 'destroy'])->name('admin.roles.delete');


    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/settings', [App\Http\Controllers\AdminPanel\SettingsController::class, 'index'])->name('admin.settings.index');
    Route::get('/settings/general', [App\Http\Controllers\AdminPanel\SettingsController::class, 'general'])->name('admin.settings.general');
    Route::post('/settings/general', [App\Http\Controllers\AdminPanel\SettingsController::class, 'update_general'])->name('admin.settings.update-general');
    /////////////////////////////////////////////
    Route::get('/currencies', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'index'])->name('admin.currencies.index');
    Route::get('/currencies/create', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'create'])->name('admin.currencies.create');
    Route::post('/currencies/store', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'store'])->name('admin.currencies.store');
    Route::get('/currencies/edit/{id}', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'edit'])->name('admin.currencies.edit');
    Route::post('/currencies/update/{id}', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'update'])->name('admin.currencies.update');
    Route::get('/currencies/delete/{id}', [App\Http\Controllers\AdminPanel\CurrenciesController::class, 'destroy'])->name('admin.currencies.delete');
    /////////////////////////////////////////////
    Route::get('/categories', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/edit/{id}', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/categories/update/{id}', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::get('/categories/delete/{id}', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'destroy'])->name('admin.categories.delete');
    Route::get('/categories/change-status/{id}', [App\Http\Controllers\AdminPanel\CategoriesController::class, 'change_status'])->name('admin.categories.changeStatus');

    /////////////////////////////////////////////
    Route::get('/packages', [App\Http\Controllers\AdminPanel\PackagesController::class, 'index'])->name('admin.packages.index');
    Route::get('/packages/create', [App\Http\Controllers\AdminPanel\PackagesController::class, 'create'])->name('admin.packages.create');
    Route::post('/packages/store', [App\Http\Controllers\AdminPanel\PackagesController::class, 'store'])->name('admin.packages.store');
    Route::get('/packages/edit/{id}', [App\Http\Controllers\AdminPanel\PackagesController::class, 'edit'])->name('admin.packages.edit');
    Route::post('/packages/update/{id}', [App\Http\Controllers\AdminPanel\PackagesController::class, 'update'])->name('admin.packages.update');
    Route::get('/packages/delete/{id}', [App\Http\Controllers\AdminPanel\PackagesController::class, 'destroy'])->name('admin.packages.delete');
    Route::get('/packages/change-status/{id}', [App\Http\Controllers\AdminPanel\PackagesController::class, 'change_status'])->name('admin.packages.changeStatus');
    /////////////////////////////////////////////
    Route::get('/countries', [App\Http\Controllers\AdminPanel\CountriesController::class, 'index'])->name('admin.countries.index');
    Route::get('/countries/create', [App\Http\Controllers\AdminPanel\CountriesController::class, 'create'])->name('admin.countries.create');
    Route::post('/countries/store', [App\Http\Controllers\AdminPanel\CountriesController::class, 'store'])->name('admin.countries.store');
    Route::get('/countries/edit/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'edit'])->name('admin.countries.edit');
    Route::post('/countries/update/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'update'])->name('admin.countries.update');
    Route::get('/countries/delete/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'destroy'])->name('admin.countries.delete');
    Route::get('/countries/change-status/{id}', [App\Http\Controllers\AdminPanel\CountriesController::class, 'change_status'])->name('admin.countries.changeStatus');
    /////////////////////////////////////////////
    Route::get('/cities', [App\Http\Controllers\AdminPanel\CitiesController::class, 'index'])->name('admin.cities.index');
    Route::get('/cities/create', [App\Http\Controllers\AdminPanel\CitiesController::class, 'create'])->name('admin.cities.create');
    Route::post('/cities/store', [App\Http\Controllers\AdminPanel\CitiesController::class, 'store'])->name('admin.cities.store');
    Route::get('/cities/edit/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'edit'])->name('admin.cities.edit');
    Route::post('/cities/update/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'update'])->name('admin.cities.update');
    Route::get('/cities/delete/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'destroy'])->name('admin.cities.delete');
    Route::get('/cities/change-status/{id}', [App\Http\Controllers\AdminPanel\CitiesController::class, 'change_status'])->name('admin.cities.changeStatus');

    /////////////////////////////////////////////
    Route::get('/advertisments', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'index'])->name('admin.advertisments.index');
    Route::get('/advertisments/create', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'create'])->name('admin.advertisments.create');
    Route::post('/advertisments/store', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'store'])->name('admin.advertisments.store');
    Route::get('/advertisments/edit/{id}', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'edit'])->name('admin.advertisments.edit');
    Route::post('/advertisments/update/{id}', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'update'])->name('admin.advertisments.update');
    Route::get('/advertisments/delete/{id}', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'destroy'])->name('admin.advertisments.delete');
    Route::get('/advertisments/change-status/{id}', [App\Http\Controllers\AdminPanel\AdvertismentsController::class, 'change_status'])->name('admin.advertisments.changeStatus');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/admins', [App\Http\Controllers\AdminPanel\AdminsController::class, 'index'])->name('admin.admins.index');
    Route::post('/admins/store', [App\Http\Controllers\AdminPanel\AdminsController::class, 'store'])->name('admin.admins.store');
    Route::get('/admins/edit', [App\Http\Controllers\AdminPanel\AdminsController::class, 'edit'])->name('admin.admins.edit');
    Route::post('/admins/update/{id}', [App\Http\Controllers\AdminPanel\AdminsController::class, 'update'])->name('admin.admins.update');
    Route::get('/admins/delete/{id}', [App\Http\Controllers\AdminPanel\AdminsController::class, 'destroy'])->name('admin.admins.delete');
    Route::get('/admins/change-status/{id}', [App\Http\Controllers\AdminPanel\AdminsController::class, 'change_status'])->name('admin.admins.changeStatus');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/admins-store', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'index'])->name('admin.admins-store.index');
    Route::post('/admins-store/store', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'store'])->name('admin.admins-store.store');
    Route::get('/admins-store/edit', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'edit'])->name('admin.admins-store.edit');
    Route::post('/admins-store/update/{id}', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'update'])->name('admin.admins-store.update');
    Route::get('/admins-store/delete/{id}', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'destroy'])->name('admin.admins-store.delete');
    Route::get('/admins-store/change-status/{id}', [App\Http\Controllers\AdminPanel\AdminsStoreController::class, 'change_status'])->name('admin.admins-store.changeStatus');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/customers', [App\Http\Controllers\AdminPanel\CustomersController::class, 'index'])->name('admin.customers.index');
    Route::post('/customers/store', [App\Http\Controllers\AdminPanel\CustomersController::class, 'store'])->name('admin.customers.store');
    Route::get('/customers/edit', [App\Http\Controllers\AdminPanel\CustomersController::class, 'edit'])->name('admin.customers.edit');
    Route::post('/customers/update/{id}', [App\Http\Controllers\AdminPanel\CustomersController::class, 'update'])->name('admin.customers.update');
    Route::get('/customers/delete/{id}', [App\Http\Controllers\AdminPanel\CustomersController::class, 'destroy'])->name('admin.customers.delete');
    Route::get('/customers/change-status/{id}', [App\Http\Controllers\AdminPanel\CustomersController::class, 'change_status'])->name('admin.customers.changeStatus');
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/stores', [App\Http\Controllers\AdminPanel\StoresController::class, 'index'])->name('admin.stores.index');
    Route::get('/stores/create', [App\Http\Controllers\AdminPanel\StoresController::class, 'create'])->name('admin.stores.create');
    Route::post('/stores/store', [App\Http\Controllers\AdminPanel\StoresController::class, 'store'])->name('admin.stores.store');
    Route::get('/stores/edit/{id}', [App\Http\Controllers\AdminPanel\StoresController::class, 'edit'])->name('admin.stores.edit');
    Route::post('/stores/update/{id}', [App\Http\Controllers\AdminPanel\StoresController::class, 'update'])->name('admin.stores.update');
    Route::get('/stores/delete/{id}', [App\Http\Controllers\AdminPanel\StoresController::class, 'destroy'])->name('admin.stores.delete');
    Route::get('/stores/change-status/{id}', [App\Http\Controllers\AdminPanel\StoresController::class, 'change_status'])->name('admin.stores.changeStatus');

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/stores-types', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'index'])->name('admin.stores-types.index');
    Route::get('/store-type/create', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'create'])->name('admin.store-type.create');
    Route::post('/store-type/store', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'store'])->name('admin.store-type.store');
    Route::get('/store-type/edit/{id}', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'edit'])->name('admin.store-type.edit');
    Route::post('/store-type/update/{id}', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'update'])->name('admin.store-type.update');
    Route::get('/store-type/delete/{id}', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'destroy'])->name('admin.store-type.delete');
    Route::get('/store-type/change-status/{id}', [App\Http\Controllers\AdminPanel\StoreTypeController::class, 'change_status'])->name('admin.store-type.changeStatus');


    Route::post('/get-cities-by-country', [App\Http\Controllers\AdminPanel\StoresController::class, 'getCity'])->name('get-cities-by-country')->withoutMiddleware(['auth', 'admin']);

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/salse', [App\Http\Controllers\AdminPanel\SalesController::class, 'index'])->name('admin.sales.index');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/orders', [App\Http\Controllers\AdminPanel\OrdersController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/create', [App\Http\Controllers\AdminPanel\OrdersController::class, 'create'])->name('admin.orders.create');
    Route::post('/orders/store', [App\Http\Controllers\AdminPanel\OrdersController::class, 'store'])->name('admin.orders.store');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/payment-types', [App\Http\Controllers\AdminPanel\PaymentTypesController::class, 'index'])->name('admin.payment-types.index');
    Route::get('/payment-types/change-status/{id}', [App\Http\Controllers\AdminPanel\PaymentTypesController::class, 'change_status'])->name('admin.payment-types.changeStatus');
});

////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'store', 'middleware' => ['auth', 'store']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'storeHome'])->name('store.home.index');

    /////////////////////////////////////////////
    Route::get('/roles', [App\Http\Controllers\Store\RolesController::class, 'index'])->name('store.roles.index');
    Route::get('/roles/create', [App\Http\Controllers\Store\RolesController::class, 'create'])->name('store.roles.create');
    Route::post('/roles/store', [App\Http\Controllers\Store\RolesController::class, 'store'])->name('store.roles.store');
    Route::get('/roles/edit/{id}', [App\Http\Controllers\Store\RolesController::class, 'edit'])->name('store.roles.edit');
    Route::post('/roles/update/{id}', [App\Http\Controllers\Store\RolesController::class, 'update'])->name('store.roles.update');
    Route::get('/roles/delete/{id}', [App\Http\Controllers\Store\RolesController::class, 'destroy'])->name('store.roles.delete');

    //////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/customers', [App\Http\Controllers\Store\CustomersController::class, 'index'])->name('store.customers.index');
    Route::post('/customers/store', [App\Http\Controllers\Store\CustomersController::class, 'store'])->name('store.customers.store');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/settings', [App\Http\Controllers\Store\SettingsController::class, 'index'])->name('store.settings.index');
    Route::get('/settings/general', [App\Http\Controllers\Store\SettingsController::class, 'general'])->name('store.settings.general');
    Route::post('/settings/general', [App\Http\Controllers\Store\SettingsController::class, 'update_general'])->name('store.settings.update-general');
    Route::get('/settings/seo', [App\Http\Controllers\Store\SettingsController::class, 'seo'])->name('store.settings.seo');
    Route::post('/settings/seo-ar', [App\Http\Controllers\Store\SettingsController::class, 'update_seo_ar'])->name('store.settings.seo-ar');
    Route::post('/settings/seo-en', [App\Http\Controllers\Store\SettingsController::class, 'update_seo_en'])->name('store.settings.seo-en');
    Route::get('/settings/currency', [App\Http\Controllers\Store\SettingsController::class, 'currency'])->name('store.settings.currency');
    Route::post('/settings/currency', [App\Http\Controllers\Store\SettingsController::class, 'update_currency'])->name('store.settings.update-currency');
    /////////////////////////////////////////////
    Route::get('/currencies', [App\Http\Controllers\Store\CurrenciesController::class, 'index'])->name('store.currencies.index');
    Route::get('/currencies/create', [App\Http\Controllers\Store\CurrenciesController::class, 'create'])->name('store.currencies.create');
    Route::post('/currencies/store', [App\Http\Controllers\Store\CurrenciesController::class, 'store'])->name('store.currencies.store');
    Route::get('/currencies/edit/{id}', [App\Http\Controllers\Store\CurrenciesController::class, 'edit'])->name('store.currencies.edit');
    Route::post('/currencies/update/{id}', [App\Http\Controllers\Store\CurrenciesController::class, 'update'])->name('store.currencies.update');
    Route::get('/currencies/delete/{id}', [App\Http\Controllers\Store\CurrenciesController::class, 'destroy'])->name('store.currencies.delete');


    /////////////////////////////////////////////
    Route::get('/packages', [App\Http\Controllers\Store\PackagesController::class, 'index'])->name('store.packages.index');
    Route::get('/packages/create', [App\Http\Controllers\Store\PackagesController::class, 'create'])->name('store.packages.create');
    Route::post('/packages/store', [App\Http\Controllers\Store\PackagesController::class, 'store'])->name('store.packages.store');
    Route::get('/packages/edit/{id}', [App\Http\Controllers\Store\PackagesController::class, 'edit'])->name('store.packages.edit');
    Route::post('/packages/update/{id}', [App\Http\Controllers\Store\PackagesController::class, 'update'])->name('store.packages.update');
    Route::get('/packages/delete/{id}', [App\Http\Controllers\Store\PackagesController::class, 'destroy'])->name('store.packages.delete');
    Route::get('/packages/change-status/{id}', [App\Http\Controllers\Store\PackagesController::class, 'change_status'])->name('store.packages.changeStatus');


    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/admins', [App\Http\Controllers\Store\AdminsController::class, 'index'])->name('store.admins.index');
    Route::post('/admins/store', [App\Http\Controllers\Store\AdminsController::class, 'store'])->name('store.admins.store');
    Route::get('/admins/edit', [App\Http\Controllers\Store\AdminsController::class, 'edit'])->name('store.admins.edit');
    Route::post('/admins/update/{id}', [App\Http\Controllers\Store\AdminsController::class, 'update'])->name('store.admins.update');
    Route::get('/admins/delete/{id}', [App\Http\Controllers\Store\AdminsController::class, 'destroy'])->name('store.admins.delete');
    Route::get('/admins/change-status/{id}', [App\Http\Controllers\Store\AdminsController::class, 'change_status'])->name('store.admins.changeStatus');
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/copons', [App\Http\Controllers\Store\CoponsController::class, 'index'])->name('store.copons.index');
    Route::post('/copons/store', [App\Http\Controllers\Store\CoponsController::class, 'store'])->name('store.copons.store');
    Route::get('/copons/edit', [App\Http\Controllers\Store\CoponsController::class, 'edit'])->name('store.copons.edit');
    Route::post('/copons/update/{id}', [App\Http\Controllers\Store\CoponsController::class, 'update'])->name('store.copons.update');
    Route::get('/copons/delete/{id}', [App\Http\Controllers\Store\CoponsController::class, 'destroy'])->name('store.copons.delete');
    Route::get('/copons/change-status/{id}', [App\Http\Controllers\Store\CoponsController::class, 'change_status'])->name('store.copons.changeStatus');


    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/salse', [App\Http\Controllers\Store\SalesController::class, 'index'])->name('store.sales.index');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/orders', [App\Http\Controllers\Store\OrdersController::class, 'index'])->name('store.orders.index');
    Route::get('/orders-services', [App\Http\Controllers\Store\OrdersController::class, 'ordersServices'])->name('store.orders-services.index');
    Route::get('/orders/create', [App\Http\Controllers\Store\OrdersController::class, 'create'])->name('store.orders.create');
    Route::post('/orders/store', [App\Http\Controllers\Store\OrdersController::class, 'store'])->name('store.orders.store');

});

Route::group(['prefix' => 'product', 'middleware' => ['auth', 'store']], function () {
    Route::get('/products', [App\Http\Controllers\Store\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/add_custom_made', [App\Http\Controllers\Store\ProductController::class, 'add_custom_made'])->name('products.add.custom_made');
    Route::get('/products/edit_custom_made/{id}', [App\Http\Controllers\Store\ProductController::class, 'edit_product'])->name('products.edit.custom_made');
    Route::get('/products/add_ready_made', [App\Http\Controllers\Store\ProductController::class, 'add_ready_made'])->name('products.add.ready_made');
    Route::get('/products/add_service_made', [App\Http\Controllers\Store\ProductController::class, 'add_service_made'])->name('products.add.service_made');
    Route::get('/products/get_product_colors', [App\Http\Controllers\Store\ProductController::class, 'get_product_colors'])->name('products.get.get_product_colors');
    Route::POST('/products/add_category', [App\Http\Controllers\Store\ProductController::class, 'add_category'])->name('products.add.category');
    Route::POST('/products/get_product', [App\Http\Controllers\Store\ProductController::class, 'product_data'])->name('products.get.get_product');
    Route::post('/products/add_product_color', [App\Http\Controllers\Store\ProductController::class, 'add_product_color'])->name('products.add.add_product_color');
    Route::post('/products/store_product', [App\Http\Controllers\Store\ProductController::class, 'store_product'])->name('products.add.add_product');
    Route::post('/products/update_product/{id}', [App\Http\Controllers\Store\ProductController::class, 'update_product'])->name('products.update.update_product');
    Route::post('/products/delete_product', [App\Http\Controllers\Store\ProductController::class, 'delete_product'])->name('products.delete.delete_product');
    Route::post('/products/active_deactive_product', [App\Http\Controllers\Store\ProductController::class, 'active_deactive_product'])->name('products.update.active_deactive_product');
});

Route::group(['prefix' => 'affiliate', 'middleware' => ['auth', 'store']], function () {
    Route::get('/affiliates', [App\Http\Controllers\Store\AffiliateMarketingController::class, 'index'])->name('affiliate.index');
    Route::get('/affiliates/add_affiliate', [App\Http\Controllers\Store\AffiliateMarketingController::class, 'add_affiliate'])->name('affiliate.add_affiliate');
});


require __DIR__ . '/website/website.php';

#Socail Media Login and Register ^_^
Route::get('auth/{provider}/redirect', [App\Http\Controllers\Auth\SocialiteLoginController::class, 'redirect'])->name('auth.socialite.redirect');
Route::get('auth/{provider}/callback', [App\Http\Controllers\Auth\SocialiteLoginController::class, 'callback'])->name('auth.socialite.callback');
