<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Frontend\FrontendController;
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

//Route::get('/' , 'App\Http\Controllers\FrontendController@index');

Route::resource('/' , FrontendController::class);

//------------backend-----------------------
Route::resource('/backend/orders' , OrderController::class);

Route::get('/backend/ocardindex' , 'App\Http\Controllers\Backend\OCardController@ocardindex');
Route::post('/backend/ocardtest' , 'App\Http\Controllers\Backend\OCardController@ocardtest');

Route::get('/backend/productsIndex' , 'App\Http\Controllers\Backend\ProductController@index');
Route::get('/backend/productEdit/{pid}' , 'App\Http\Controllers\Backend\ProductController@edit');
Route::post('/backend/productUpdate' , 'App\Http\Controllers\Backend\ProductController@update');

Route::get('/backend/brandIndex' , 'App\Http\Controllers\Backend\BrandController@index');
Route::get('/backend/brandEdit/{pbid}' , 'App\Http\Controllers\Backend\BrandController@edit');
Route::post('/backend/brandUpdate' , 'App\Http\Controllers\Backend\BrandController@update');

Route::get('/backend/categoryIndex' , 'App\Http\Controllers\Backend\CategoryController@index');
Route::get('/backend/categoryEdit/{pcid}' , 'App\Http\Controllers\Backend\CategoryController@edit');
Route::post('/backend/categoryUpdate' , 'App\Http\Controllers\Backend\CategoryController@update');

Route::get('/backend/working' ,function () {
    return view('backend.working');
});
//------------frontend-----------------------


Route::get('/about1' , 'App\Http\Controllers\Frontend\AboutController@about1');
Route::get('/about2' , 'App\Http\Controllers\Frontend\AboutController@about2');
Route::get('/about3' , 'App\Http\Controllers\Frontend\AboutController@about3');

Route::get('/brand/{bName}' , 'App\Http\Controllers\Frontend\BrandController@brand');

Route::get('/gifts' , 'App\Http\Controllers\Frontend\GiftController@gifts');

Route::get('/news' , 'App\Http\Controllers\Frontend\NewsController@news');
Route::get('/newsDetails' , 'App\Http\Controllers\Frontend\NewsController@newsDetails');

Route::get('/products' , 'App\Http\Controllers\Frontend\ProductController@products');
Route::get('/productsAll' , 'App\Http\Controllers\Frontend\ProductController@productsAll');
Route::get('/productsNew' , 'App\Http\Controllers\Frontend\ProductController@productsNew');
Route::get('/productsDetails' , 'App\Http\Controllers\Frontend\ProductController@productsDetails');

Route::get('/specials' , 'App\Http\Controllers\Frontend\SpecialController@specials');
Route::get('/specialDetails' , 'App\Http\Controllers\Frontend\SpecialController@specialDetails');

Route::get('/stores' , 'App\Http\Controllers\Frontend\StoreController@stores');
Route::get('/storeDetails' , 'App\Http\Controllers\Frontend\StoreController@storeDetails');

Route::get('/carts' , 'App\Http\Controllers\Frontend\CartController@carts');


