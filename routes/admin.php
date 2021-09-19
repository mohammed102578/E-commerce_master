<?php

//use App\Http\Controllers\Admin\LoginController;
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


define('PAGINATION_COUNT',10);
Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'], function () {
    Route::get('/','dashboardController@index')->name('admin.dashboard');

    ############languages route###########
    Route::group(['prefix' => 'languages'], function () {
        Route::get('/','LanguagesController@index') -> name('admin.languages');
        Route::get('create','LanguagesController@create') -> name('admin.languages.create');
        Route::post('store','LanguagesController@store') -> name('admin.languages.store');

        Route::get('edit/{id}','LanguagesController@edit') -> name('admin.languages.edit');
        Route::post('update/{id}','LanguagesController@update') -> name('admin.languages.update');

        Route::get('delete/{id}','LanguagesController@destroy') -> name('admin.languages.delete');
    });
#####end language route##############################################




############MainCategory route###########
Route::group(['prefix' => 'Main_Category'], function () {
    Route::get('/','MainCategoryController@index') -> name('admin.MainCategory');
    Route::get('create','MainCategoryController@create') -> name('admin.MainCategory.create');
    Route::post('store','MainCategoryController@store') -> name('admin.MainCategory.store');

    Route::get('edit/{id}','MainCategoryController@edit') -> name('admin.MainCategory.edit');
    Route::post('update/{id}','MainCategoryController@update') -> name('admin.MainCategory.update');
    Route::get('changeStatus/{id}','MainCategoryController@changeStatus') -> name('admin.MainCategory.changestatus');
    Route::get('delete/{id}','MainCategoryController@destroy') -> name('admin.MainCategory.delete');
});
##### end main category route##############################################




############subCategory route###########
Route::group(['prefix' => 'Sub_Category'], function () {
    Route::get('/','SubCategoryController@index') -> name('admin.SubCategory');
    Route::get('create','SubCategoryController@create') -> name('admin.SubCategory.create');
    Route::post('store','SubCategoryController@store') -> name('admin.SubCategory.store');

    Route::get('edit/{id}','SubCategoryController@edit') -> name('admin.SubCategory.edit');
    Route::post('update/{id}','SubCategoryController@update') -> name('admin.SubCategory.update');
    Route::get('changeStatus/{id}','SubCategoryController@changeStatus') -> name('admin.SubCategory.changestatus');
    Route::get('delete/{id}','SubCategoryController@destroy') -> name('admin.SubCategory.delete');
});
##### end sub category route##############################################








######################### Begin vendors Routes ########################
    Route::group(['prefix' => 'vendors'], function () {
        Route::get('/','VendorsController@index') -> name('admin.vendors');
        Route::get('create','VendorsController@create') -> name('admin.vendors.create');
        Route::post('store','VendorsController@store') -> name('admin.vendors.store');
        Route::get('edit/{id}','VendorsController@edit') -> name('admin.vendors.edit');
        Route::post('update/{id}','VendorsController@update') -> name('admin.vendors.update');
        Route::get('delete/{id}','VendorsController@destroy') -> name('admin.vendors.delete');
        Route::get('changeStatus/{id}','VendorsController@changeStatus') -> name('admin.vendors.changestatus');
    });
    ######################### End  vendors Routes  ########################


####################begin admin route##############################################
Route::group(['prefix' => 'Profile'], function () {
Route::get('/','ProfileController@index') -> name('admin.profile');
Route::get('edit/{id}','ProfileController@edit') -> name('admin.profile.edit');
Route::post('update/{id}','ProfileController@update') -> name('admin.profile.update');
Route::post('updatePassword/{id}','ProfileController@changePassword') -> name('admin.profile.changePassword');
Route::get('logout', 'LoginController@logout')->name('admin.logout');
});

####################bend admin route##############################################

});





Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'], function () {
    Route::get('login','LoginController@getlogin')->name('get.Admin.login');
    Route::post('login','LoginController@login')->name('admin.login');

});
