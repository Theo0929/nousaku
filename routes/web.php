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
Route::get('/backend' , 'App\Http\Controllers\Backend\OrderController@index');

Route::get('/backend/orders' , 'App\Http\Controllers\Backend\OrderController@index');

Route::get('/backend/ocardindex' , 'App\Http\Controllers\Backend\OCardController@ocardindex');
Route::post('/backend/ocardtest' , 'App\Http\Controllers\Backend\OCardController@ocardtest');

Route::get('/backend/productsIndex' , 'App\Http\Controllers\Backend\ProductController@index');
Route::get('/backend/productEdit/{pid}' , 'App\Http\Controllers\Backend\ProductController@edit');
Route::post('/backend/productUpdate' , 'App\Http\Controllers\Backend\ProductController@update');
Route::get('/backend/productCreate' , 'App\Http\Controllers\Backend\ProductController@create');
Route::post('/backend/productInsert' , 'App\Http\Controllers\Backend\ProductController@insert');

Route::get('/backend/brandIndex' , 'App\Http\Controllers\Backend\BrandController@index');
Route::get('/backend/brandEdit/{pbid}' , 'App\Http\Controllers\Backend\BrandController@edit');
Route::post('/backend/brandUpdate' , 'App\Http\Controllers\Backend\BrandController@update');
Route::get('/backend/brandCreate' , 'App\Http\Controllers\Backend\BrandController@create');
Route::post('/backend/brandInsert' , 'App\Http\Controllers\Backend\BrandController@insert');
Route::post('/backend/brandDeleteFlag' , 'App\Http\Controllers\Backend\BrandController@deleteFlag');

Route::get('/backend/categoryIndex' , 'App\Http\Controllers\Backend\CategoryController@index');
Route::get('/backend/categoryEdit/{pcid}' , 'App\Http\Controllers\Backend\CategoryController@edit');
Route::post('/backend/categoryUpdate' , 'App\Http\Controllers\Backend\CategoryController@update');
Route::get('/backend/categoryCreate' , 'App\Http\Controllers\Backend\CategoryController@create');
Route::post('/backend/categoryInsert' , 'App\Http\Controllers\Backend\CategoryController@insert');
Route::post('/backend/categoryDeleteFlag' , 'App\Http\Controllers\Backend\CategoryController@deleteFlag');

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
Route::get('/productsDetails/{pid}' , 'App\Http\Controllers\Frontend\ProductController@productsDetails');

Route::get('/specials' , 'App\Http\Controllers\Frontend\SpecialController@specials');
Route::get('/specialDetails' , 'App\Http\Controllers\Frontend\SpecialController@specialDetails');

Route::get('/stores' , 'App\Http\Controllers\Frontend\StoreController@stores');
Route::get('/storeDetails' , 'App\Http\Controllers\Frontend\StoreController@storeDetails');

Route::get('/carts' , 'App\Http\Controllers\Frontend\CartController@carts');
Route::post('/cartAdd' , 'App\Http\Controllers\Frontend\CartController@cartAdd');
