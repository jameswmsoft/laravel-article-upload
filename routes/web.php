<?php

use Illuminate\Http\RedirectResponse;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function (){
    return redirect('/index');
});


Route::get('index', 'SputtaController@index');
Route::get('index/detail/{id}', 'SputtaController@detail');
//Route::get('/index/getSignup', 'SputtaController@getSignup');
Route::post('index/postSignup', 'SputtaController@postSignup');
Route::post('index/login', 'SputtaController@login');
Route::get('index/logout', 'SputtaController@logout');

Route::post('index/comment/save', 'SputtaController@commentSave');


Route::get('admin', 'AdminController@adminLogin');
Route::post('admin/login', 'AdminController@postadminLogin');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'role'], function () {

        Route::get('admin/news', 'AdminController@index');
        Route::get('admin/news/edit/{id}', 'AdminController@contentEdit');
        Route::get('admin/news/add', 'AdminController@contentAdd');
        Route::post('admin/news/add', 'AdminController@postContentAdd');
        Route::post('admin/news/update', 'AdminController@postContentUpdate');
        Route::post('admin/news/delete', 'AdminController@contentDelete');

        Route::get('admin/users', 'AdminController@users');
        Route::post('admin/users/edit', 'AdminController@usersEdit');
        Route::post('admin/users/delete', 'AdminController@usersDelete');

        Route::get('admin/category', 'AdminController@category');
        Route::post('admin/category/edit', 'AdminController@categoryEdit');
        Route::post('admin/category/save', 'AdminController@categoryAdd');
        Route::post('admin/category/delete', 'AdminController@categoryDelete');

        Route::get('admin/profile', 'AdminController@profile');
        Route::post('admin/profile/save', 'AdminController@profileSave');

        });
});



