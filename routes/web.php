<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
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

Route::get('/', [MainController::class, 'principal'])
  ->name('site.index');

Route::get('/login/{error?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.login');

Route::get('/contact', [ContactController::class, 'contact'])
  ->name('site.contact');
Route::post('/contact', [ContactController::class, 'save'])
  ->name('site.contact');

Route::get('/about', [AboutController::class, 'about'])->name('site.about');

Route::middleware('autenticacao:default,visitant')->prefix('/app')->group(function () {
    Route::get('/out', [LoginController::class, 'out'])->name('app.out');
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');

    Route::get('/supplier', [SupplierController::class, 'index'])->name('app.supplier');
    Route::post('/supplier/list', [SupplierController::class, 'list'])->name('app.supplier.list');
    Route::get('/supplier/list', [SupplierController::class, 'list'])->name('app.supplier.list');
    Route::get('/supplier/add', [SupplierController::class, 'add'])->name('app.supplier.add');
    Route::post('/supplier/add', [SupplierController::class, 'add'])->name('app.supplier.add');
    Route::get('/supplier/edit/{id}/{msg?}', [SupplierController::class, 'edit'])->name('app.supplier.edit');
    Route::get('/supplier/remove/{id}/{msg?}', [SupplierController::class, 'delete'])->name('app.supplier.remove');

    // Products resource
    Route::resource('/product', ProductController::class);

    // Product Details resource
    Route::resource('/product-details', ProductDetailController::class);
    Route::resource('client', ClientController::class);
    Route::resource('order', OrderController::class);
//    Route::resource('order-product', OrderProductController::class);
    Route::get('order-product/create/{order}', [OrderProductController::class, 'create'])->name('order-product.create');
    Route::post('order-product/create/{order}', [OrderProductController::class, 'store'])->name('order-product.store');
});

Route::get('/test/{p1}/{p2}', [TestController::class, 'teste'])->name('site.route1');


Route::fallback(function () {
    return 'The route accessed does not exist. <a href="' . route(
        'site.index'
      ) . '">Click here</a> to redirect for main page ';
});
