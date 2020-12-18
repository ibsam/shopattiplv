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
Route::get('/get-all-category','CategoryController@getAllCategory');
Route::get('/category/{url_name}.htm','CategoryController@Category')->where(['url_name'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);
Route::get('/brand/{url_name}.htm','BrandController@Brand')->where(['url_name'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);


Route::get('/shop-products','CategoryController@ShopProducts');
Route::get('/search-shop-products','CategoryController@SearchShopProducts');
Route::get('/filter-shop-products','CategoryController@FilterShopProducts');
Route::get('/category-shop-products','CategoryController@CategoryShopProducts');

//Route::get('/api/getColors/{colors}','ProductController@getColors');

Route::post('/api/add_review','ProductController@addReview');
Route::get('/api/get_reviews/{id}','ProductController@getRevivews')->where('id','[0-9]+');
Route::get('/api/get_product_specification/{pid}','ProductController@getSpecifications');

Route::get('/api/get_product_variation/{variation}_{id}','ProductController@getVariations')->where([
    'variation' => '([A-Za-z]+-)([A-Za-z]+-)([A-Za-z]+)',
    'id' => '[0-9]+'
]);

//  Cart Routes
Route::post('/cart.htm','CartController@viewCart')->middleware('cart');
Route::get('/api/getCookie','CartController@apiGetCookie');
Route::get('/api/getcart/{id}','CartController@apiGetCart');
Route::post('/api/update_cart','CartController@apiUpdateCart');
Route::get('/api/delete_cart/{id}','CartController@apiDeleteCart');


/// Checkout route
Route::namespace('Customer')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('/customer_login','LoginController@showLoginForm')->name('customer_login');
        Route::post('/customer_login','LoginController@login');
        Route::get('/customer_register','RegisterController@showRegistrationForm');
        Route::post('/customer_register','RegisterController@register');
        Route::post('/customer_logout','LoginController@logout')->name('cusotmer-login');
        // Route::post('/login','CustomerController@login')->middleware('auth:customers');
        // Route::get('/register','CustomerController@register')->middleware('auth:customers');
    });
});



//TipMart

Route::get('/tipmart','TipMartController@tipMartIndex');
Route::get('/tipmart/shop','TipMartController@Shop');



//Tip mart
Route::get('/tipmart','HomePageController@tipMartIndex');

//Payment
Route::get('/checkout','PaymentController@index');
