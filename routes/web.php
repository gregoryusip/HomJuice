<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardIngredientController;
use App\Http\Controllers\DashboardOutletController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Outlet;
use App\Models\Product;
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
// */

Route::get('/', function () {
    return view('home.home', [
        "title" => "Home",
        "products" => Product::where('is_best_seller', true)->get(),
    ]);
});

Route::get('/admin-login', [LoginController::class, 'index'])->name('admin-login');
Route::post('/admin-login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'productDetail']);

Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blogs/{post:slug}', [PostController::class, 'blogDetail']);


// Route::get('/blogs', function () {
//     return view('blog.blog',  [
//         "title" => "Blog",
//     ]);
// });
Route::get('/outlet', [OutletController::class, 'index']);
Route::get('/promo', function () {
    return view('promo.promo',  [
        "title" => "Promo",
    ]);
});
Route::get('/about-us', function () {
    return view('about.about',  [
        "title" => "About Us",
        "products_count" => Product::count(),
        "categories_count" => Category::count(),
        "outlets_count" => Outlet::count(),
    ]);
});


// DASHBOARD
Route::get('/dashboard', function(){
    return view('dashboard.index',[
        "title" => "Dashboard",
    ]);
})->middleware('auth');


Route::get('/dashboard/products/checkSlug',[DashboardProductController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug',[DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth');

Route::get('/dashboard/ingredients/checkSlug',[DashboardIngredientController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/ingredients', DashboardIngredientController::class)->middleware('auth');

Route::get('/dashboard/outlets/checkSlug',[DashboardOutletController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/outlets', DashboardOutletController::class)->middleware('auth');

Route::resource('/dashboard/admins', DashboardAdminController::class)->middleware('auth');
