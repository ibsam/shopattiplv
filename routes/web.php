<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LanguageController;

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


Route::get('/','HomePageController@shopAtTipIndex');




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

Route::get('/api/get_product_variation/{variation}_{id}','ProductController@getVariations');

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

// Payment
Route::get('/checkout','PaymentController@index');
Route::post('/payment','PaymentController@addPaymentInfo');
Route::get('/payment','PaymentController@getOrderDetail');
Route::post('/thankyou','PaymentController@setItemsInOrder');



    ///Customer Profile

    Route::get('/my-account','CustomerController@profile');
    Route::post('/customer-update','CustomerController@update');

    /// Api Customer Address update
    Route::get('/api/get-customer-detail/{id}','CustomerController@getCustomerDetail');
    Route::post('/api/update-Billing-Address/{isbiling}_{customerid}','CustomerController@updateCustomerBillingAddress');
    Route::post('/api/add-new-billing-address','CustomerController@addNewAddressDetail');


    // Static Routes
    Route::get('/contact-us','StaticPagesController@getContactUs');
    Route::post('/contact-us','StaticPagesController@contactUs');










########## Admin Routes ######################################
//Auth::routes();
//Auth::routes();
Route::namespace('Admin')->prefix('admin')->group(function(){
Route::get('/', 'AdminController@home')->name('home');
Route::namespace('Auth')->group(function(){
    Route::get('/login','LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','LoginController@login')->name('admin.login');
    Route::get('/forget-password','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('/password/update','ResetPasswordController@reset')->name('admin.password.update');
});
// brand
Route::resource('brand', 'BrandController');
// product

Route::resource('product', 'ProductController');
Route::post('products/sku_combination', 'ProductController@sku_combination')->name('admin.products.sku_combination');

Route::resource('category','CategoryController');
    // brand
    Route::resource('brand', 'BrandController');
    // product
    Route::resource('product', 'ProductController');
    //Category
    Route::resource('category','CategoryController');
    //Banner
    Route::resource('banner','BannerController');
    //Menu
    Route::resource('menu','MenuController');
    //Orders
    Route::get('/order-detail/{id}','OrderController@getOrderDetail')->name('order.order_detail');
    Route::get('/order-datail/{id}','OrderController@generateInvoice')->name('order.generate_invoice');
    Route::resource('order','OrderController');
    // Campaign
    Route::resource('campaign','CampaignController');
    //Commission
    Route::resource('commission', 'CommissionController');
    //Vendor
    Route::resource('vendor', 'VendorRegisterController');


    Route::get('admin/test', 'AdminController@test')->name('test');
    Route::get('admin/list', 'AdminController@getTest')->name('admin.list');

    Route::get('home', 'AdminController@home')->name('home');
    // Route Components
    Route::get('layouts/collapsed-menu', 'AdminController@collapsed_menu')->name('collapsed-menu');
    Route::get('layouts/boxed', 'AdminController@layout_boxed')->name('layout-boxed');
    Route::get('layouts/without-menu', 'AdminController@without_menu')->name('without-menu');
    Route::get('layouts/empty', 'AdminController@layout_empty')->name('layout-empty');
    Route::get('layouts/blank', 'AdminController@layout_blank')->name('layout-blank');

   
    // locale Route
    Route::get('lang/{locale}', [LanguageController::class, 'swap']);

    //Vendor profile
    

});
Route::get('/vendor/register','Auth\RegisterController@showRegistrationForm');



