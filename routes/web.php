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
Route::get('/api/latest-reviews/{id}','ProductController@getLatestReviews');
Route::get('/api/get_product_specification/{pid}','ProductController@getSpecifications');

Route::get('/api/get_product_variation/{variation}_{id}','ProductController@getVariations')->where([
    'variation' => '([A-Za-z]+-)([A-Za-z]+-)([A-Za-z]+)',
    'id' => '[0-9]+'
]);

//  Cart Routes
Route::post('/cart.htm','CartController@viewCart')->middleware('cart');
Route::get('/cart.htm','CartController@viewCart');
Route::get('/api/getCookie','CartController@apiGetCookie');
Route::get('/api/getcart/{id}','CartController@apiGetCart');
Route::post('/api/update_cart','CartController@apiUpdateCart');
Route::get('/api/delete_cart/{id}','CartController@apiDeleteCart');



/// Checkout route
Route::namespace('Customer')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::post('/api/customer-login','LoginController@apiLogin');
        Route::get('/customer_login','LoginController@showLoginForm')->name('customer_login');
        Route::post('/customer_login','LoginController@login');
        Route::get('/customer_register','RegisterController@showRegistrationForm');
        Route::post('/customer_register','RegisterController@register');
        Route::post('/api/customer-register','RegisterController@apiRegister');
        Route::post('/customer_logout','LoginController@logout')->name('cusotmer-login');
        Route::get('/forget-password','ForgotPasswordController@showConfirmForm');
        //Route::get('/order_detail', 'PaymentController@addPaymentInfo');
       // Route::get('/order_detail', 'payment@addPaymentInfo');
        
        Route::get('/customer/forget_password','ForgotPasswordController@showLinkRequestForm');
        Route::post('/customer/forget_email','ForgotPasswordController@sendResetLinkEmail');
        Route::get('/customer/reset/{token}','ResetPasswordController@showResetForm')->name('customer.reset');
        Route::post('/customer/reset','ResetPasswordController@reset')->name('customer.update');
        Route::post('/customer/google','LoginController@getLoginWithGoogle');
        Route::get('/customer/google-login','LoginController@loginWithGoogle');
        Route::get('/customer/facebook','LoginController@getLoginWithFacebook');
        Route::get('/customer/facebook-login','LoginController@loginWithFacebook');
        // Route::post('/login','CustomerController@login')->middleware('auth:customers');
        // Route::get('/register','CustomerController@register')->middleware('auth:customers');
    });
});



//TipMart

Route::get('/tipmart','TipMartController@tipMartIndex');
Route::get('/tipmart/shop','TipMartController@Shop');
Route::get('/tipmart-get-all-category','CategoryController@tipmartgetAllCategory');


Route::get('/tipmart-shop-products','CategoryController@tipmartShopProducts');
Route::get('/tipmart-search-shop-products','CategoryController@tipmartSearchShopProducts');
Route::get('/tipmart-filter-shop-products','CategoryController@tipmartFilterShopProducts');
Route::get('/tipmart-category-shop-products','CategoryController@tipmartCategoryShopProducts');
Route::get('/tipmart/category/{url_name}.htm','CategoryController@tipmartCategory')->where(['url_name'],['([A-Za-z]+-*)([A-Za-z]+)','[0-9]+']);

//Tip mart end

//Payment
Route::get('/checkout','PaymentController@index');
Route::post('/payment','PaymentController@addPaymentInfo');
Route::get('/payment','PaymentController@getOrderDetail');
Route::post('/thankyou','PaymentController@setItemsInOrder');


//static routes
// Route::get('/contact-us',function(){
// return view('user.shopattip.contact-us');

// });
