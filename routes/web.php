<?php
use GuzzleHttp\Middleware;
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




Route::group(['namespace'=>'user','middleware'=>'guest'], function () {

    Route::get('forget-password', 'ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');

    Route::post('forget-password', 'ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');

    Route::get('reset-password/{token}', 'ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');

    Route::post('reset-password', 'ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');


    Route::get('login','loginController@getlogin')->name('get.user.login');
    Route::post('login','loginController@login')->name('user.login');
    //========================================================================================================
    Route::get('/', 'mainpageController@home')->name('user.home');
    Route::get('register','RegisterController@getregister')->name('get.user.register');
    Route::post('register','RegisterController@store')->name('user.register');
    // Route::match(['get', 'post'], '/check-email','RegisterController@checkEmail');
    // Route::match(['get', 'post'], '/check-mobile','RegisterController@checkMobile');

    // Route::get('product_discount', 'mainpagenotloginController@product_discount')->name('mainpagenotlogin.product_discount');
    // Route::get('product_new', 'mainpagenotloginController@product_new')->name('mainpagenotlogin.product_new');
    // Route::get('product_low', 'mainpagenotloginController@product_low')->name('mainpagenotlogin.product_low');
    // Route::get('product_high', 'mainpagenotloginController@product_high')->name('mainpagenotlogin.product_high');
    // Route::get('product_page/{id}', 'mainpagenotloginController@product_page')->name('mainpagenotlogin.product_page');

    // Route::get('viewAddtocart', 'mainpagenotloginController@viewAddtocart')->name('mainpagenotlogin.viewAddtocart');
    // Route::get('delete/{id}', 'mainpagenotloginController@destroy')->name('mainpagenotlogin.delete');
    // Route::post('/charge', 'mainpagenotloginController@charge')->name('cart.charge');
    //================================================================================================
    Route::get('mainPage', 'mainpageController@mainpage')->name('user.mainpage');
    Route::get('mainPage/product_discount', 'mainpageController@product_discount')->name('mainpage.product_discount');
    Route::get('mainPage/product_new', 'mainpageController@product_new')->name('mainpage.product_new');
    Route::get('mainPage/product_low', 'mainpageController@product_low')->name('mainpage.product_low');
    Route::get('mainPage/product_high', 'mainpageController@product_high')->name('mainpage.product_high');
    Route::get('mainPage/product_page/{id}', 'mainpageController@product_page')->name('mainpage.product_page');
    Route::get('mainPage/category_product/{id}', 'mainpageController@category_product')->name('mainpage.categoryProduct');
    Route::post('search', 'mainpageController@search')->name('user.search');


});

//Auth::routes(['verify' => true]);
Route::group(['namespace'=>'user','middleware'=>'auth:web','verfiy'=>true], function () {

    Route::get('logout', 'loginController@logout')->name('user.logout');
    //Route::post('mainPage/search', 'mainpageController@search')->name('user.search');

    Route::get('mainPage', 'mainpageController@mainpage')->name('user.mainpage');
    Route::get('mainPage/product_discount', 'mainpageController@product_discount')->name('mainpage.product_discount');
    Route::get('mainPage/product_new', 'mainpageController@product_new')->name('mainpage.product_new');
    Route::get('mainPage/product_low', 'mainpageController@product_low')->name('mainpage.product_low');
    Route::get('mainPage/product_high', 'mainpageController@product_high')->name('mainpage.product_high');
    Route::get('mainPage/product_page/{id}', 'mainpageController@product_page')->name('mainpage.product_page');
    Route::post('mainPage/Addtocart', 'mainpageController@Addtocart')->name('mainpage.Addtocart')->middleware('verified');
    Route::get('mainPage/viewAddtocart', 'mainpageController@viewAddtocart')->name('mainpage.viewAddtocart');
    Route::get('mainPage/delete/{id}', 'mainpageController@destroy')->name('mainpage.delete');
    Route::get('mainPage/oredrDelete/{id}', 'mainpageController@orderDestroy')->name('mainpage.orderDelete');
     Route::get('mainPage/category_product/{id}', 'mainpageController@category_product')->name('mainpage.categoryProduct');

    //===================message
    Route::post('create-messages','messagesController@storeMessage') -> name('user.messages');



    //====================profile
    Route::get('profile', 'ProfileController@profile')->name('user.profile');
    Route::get('profile/edit/{id}', 'ProfileController@edit')->name('user.editprofile');
    Route::post('profile/update/{id}', 'ProfileController@update')->name('user.updateprofile');
    Route::post('profile/changepassword/{id}', 'ProfileController@changePassword')->name('user.changepassword');

    //payment gateway
    Route::get('checkout/{amount?}/detailes/{details?}/quantity/{sum_quantity?}', 'mainpageController@checkOut')->name('check_out_cart');
    Route::post('/charge', 'mainpageController@charge')->name('cart.charge');
    Route::get('/order', 'mainpageController@order')->name('user.order');




});




?>
