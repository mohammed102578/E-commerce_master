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


//define('PAGINATION_COUNT',10);
Route::group(['namespace'=>'Vendor','middleware'=>'auth:vendor'], function () {



    Route::get('/dashboard','dashboardController@index')->name('vendor.dashboard');



############vendor route###########
Route::group(['prefix' => 'product'], function () {
    Route::get('/','ProductController@index') -> name('vendor.Product');
    Route::get('create','ProductController@create') -> name('vendor.Product.create');
    Route::post('store','ProductController@store') -> name('vendor.Product.store');

    Route::get('edit/{id}','ProductController@edit') -> name('vendor.Product.edit');
    Route::post('update/{id}','ProductController@update') -> name('vendor.Product.update');
    Route::get('changeStatus/{id}','ProductController@changeStatus') -> name('vendor.Product.changestatus');
    Route::get('delete/{id}','ProductController@destroy') -> name('vendor.Product.delete');
});
##### end Product route##############################################




####################begin vendor route##############################################
Route::group(['prefix' => 'Profile'], function () {
Route::get('/','ProfileController@index') -> name('vendor.profile');
Route::get('edit/{id}','ProfileController@edit') -> name('vendor.profile.edit');
Route::post('update/{id}','ProfileController@update') -> name('vendor.profile.update');
Route::post('updatePassword/{id}','ProfileController@changePassword') -> name('vendor.profile.changePassword');
Route::get('logout', 'LoginController@logout')->name('vendor.logout');
});

####################bend vendor route##############################################





####################begin vendor route##############################################
Route::group(['prefix' => 'notification'], function () {

    Route::post('show-notification','notificationController@shownotification') -> name('vendor.notification');

    });

    ####################bend vendor route##############################################



});





Route::group(['namespace'=>'Vendor','middleware'=>'guest:vendor'], function () {
    Route::get('login','LoginController@getlogin')->name('get.vendor.login');
    Route::post('login','LoginController@login')->name('vendor.login');

});
