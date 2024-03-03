<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;
//use App\Http\Controllers\MessagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
*/

/*
Route::get('/', [Controllers\ClientController::class, 'index'])->name('home');
Route::get('/shop', [Controllers\ClientController::class, 'shop']);
Route::get('/cart', [Controllers\ClientController::class, 'cart']);
Route::get('/checkout', [Controllers\ClientController::class, 'checkout']);
Route::get('/login', [Controllers\ClientController::class, 'login']);
Route::get('/signup', [Controllers\ClientController::class, 'signup']);
Route::get('/admin', [Controllers\AdminController::class, 'admin']) ;

Route::get('/addcategory', [Controllers\CategoryController::class, 'addcategory']) ;
Route::get('/categories', [Controllers\CategoryController::class, 'categories']) ;
Route::post('/savecategory', [Controllers\CategoryController::class, 'savecategory']) ;

Route::get('/addslider', [Controllers\SliderController::class, 'addslider']) ;
Route::get('/sliders', [Controllers\SliderController::class, 'sliders']) ;

Route::get('/addproduct', [Controllers\ProductController::class, 'addproduct']) ;
Route::get('/products', [Controllers\ProductController::class, 'products']) ;

Route::get('/orders', [Controllers\OrderController::class, 'orders']) ;
*/

Route::get('/', function () {
    return redirect('/ar');
});

Route::get('/ar', [Controllers\HomeController::class, 'index_ar'])->name('home');
Route::get('/en', [Controllers\HomeController::class, 'index_en']);


Route::get('/insc_ar', [Controllers\InscriptionController::class, 'inscription_ar']);
Route::get('/insc_en', [Controllers\InscriptionController::class, 'inscription_en']);

