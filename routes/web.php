<?php

use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\ShippingCompany;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ShippingCompanyController;
use App\Http\Controllers\SocialController;
use App\Http\Livewire\CartComponent;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Facades;

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
//     return view('dashboard');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::prefix("/dashboard")->middleware(['check_role'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user', function () {
        return view('user.index');
    })->name('user');

    Route::get('/brand', [BrandController::class, "index"])->name('brand');
    Route::get('/stock', [StockController::class, "index"])->name('stock');
    Route::get('/category', [CategoryController::class, "index"])->name('category');
    Route::get('/supplier', [SupplierController::class, "index"])->name('supplier');
    Route::get('/shipping', [ShippingCompanyController::class, "index"])->name('shipping');
    Route::get('/payment', [PaymentMethodController::class, "index"])->name('payment');
    Route::get('/product', [ProductController::class, "index"])->name('product');
    Route::get('/order', [OrderController::class, "index"])->name('order');
});

Route::prefix("/")->middleware([])->group(function () {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('/shoes', function () {
        return view('shoes');
    })->name('shoes');

    Route::get('/racingboots', function () {
        return view('racingboots');
    })->name('racingboots');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/collection', function () {
        return view('collection');
    })->name('collection');
    Route::get('/cart', [CartController::class , "index"])->name('cart');


});

// Facebook Login
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('facebook')->redirect()->name("facebook");
// });
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('facebook')->user();

    // $user->token
// });
