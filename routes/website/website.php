<?php

use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CustomerController;
use App\Http\Controllers\Website\ProductCategoryController;
use App\Http\Controllers\Website\UserFavoritesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Routes of Website [Front End Part]



//Website Pages
Route::group(['prefix' => 'customer', 'as' => 'customer.', 'middleware' => ['auth', 'customer']], function () {

    Route::withoutMiddleware(['auth', 'customer'])->group(function () {
        Route::get('/home-page', [CustomerController::class, 'index'])->name('home-page');
        Route::get('/stores/{store_type_slug}', [CustomerController::class, 'storeType'])->name('store-type-category');
        Route::get('/stores/{store_type_slug}/details/{store_name_slug}', [CustomerController::class, 'storeDetails'])->name('store-details');
        Route::get('/stores/{store_type_slug}/details/{store_name_slug}/{product_id}', [CustomerController::class, 'storeProductDetails'])->name('store-product-details');

        Route::get('/category/{category_id}', [ProductCategoryController::class, 'category'])->name('category');
        Route::get('/single-product/{product_id}', [ProductCategoryController::class, 'singleProduct'])->name('single-product');
        Route::get('/category-slider-price/{from}/{to}/{category_id}', [ProductCategoryController::class, 'updateProducts'])->name('category-slider-price');

        Route::post('/add-comment/{product_id}', [ProductCategoryController::class, 'addComment'])->name('add-comment');

        /////////////////////////////////////////////
        Route::post('/add-favorite', [UserFavoritesController::class, 'addFavorite'])->name('add.favorite');








        /////////////////////////////////////////////
        Route::get('/cart', [CartController::class, 'index'])->name('cart');
        Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.store');
        Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
        Route::get('/remove/{rowId}', [CartController::class, 'removeCart'])->name('cart.remove');
        // Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
        // Route::get('/cart-list', [CartController::class, 'cartList'])->name('cart.list');
        // Route::get('/', [ProductController::class, 'productList'])->name('products.list');

        /////////////////////////////////////////////
        Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    });
});
