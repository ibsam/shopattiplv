<?php

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
//     return view('homepage');
// });

Auth::routes();
Route::get('/','HomePageController@shopAtTipIndex');
Route::get('/tipmart','HomePageController@tipMartIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// product_routes
Route::get('/{url_name}_{id}.htm','ProductController@getProductDetail')->where(['url_name','id'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);
Route::get('/api/get_product/{id}','ProductController@getProductDetailApi')->where('id','[0-9]+');
Route::get('/porduct_detail','ProductController@getProductDetail');

Route::get('/shop','HomePageController@Shop');
Route::get('/get-category','CategoryController@getCategory');
Route::get('/c/{url_name}.htm','CategoryController@Category')->where(['url_name'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);
Route::get('/{url_name}.htm','BrandController@Brand')->where(['url_name'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);


Route::get('/shop-products','CategoryController@ShopProducts');
Route::get('/filter-shop-products','CategoryController@FilterShopProducts');
//Route::get('/api/getColors/{colors}','ProductController@getColors');

Route::post('/api/add_review','ProductController@addReview');
Route::get('/api/get_reviews/{id}','ProductController@getRevivews')->where('id','[0-9]+');
Route::get('/api/get_product_specification/{pid}','ProductController@getSpecifications');

Route::get('/api/get_product_variation/{variation}_{id}','ProductController@getVariations')->where([
    'variation' => '([A-Za-z]+-)([A-Za-z]+-)([A-Za-z]+)',
    'id' => '[0-9]+'
]);
