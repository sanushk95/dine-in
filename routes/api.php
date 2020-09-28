<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('register', 'AuthController@register')->name('user.register');
    Route::post('login', 'AuthController@login')->name('user.login');
    Route::post('logout', 'AuthController@logout')->name('user.logout');
    Route::post('refresh', 'AuthController@refresh')->name('user.refresh');
    Route::post('me', 'AuthController@me')->name('user.get');

});

Route::get('/dishes', 'DishController@index')->name('dishes.get');

Route::group(['middleware' => 'auth:api'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
    Route::post('users/{id}', 'UserController@update')->middleware('isAdminOrSelf');
    Route::post('/users/{id}/delete', 'UserController@delete')->middleware('isAdminOrSelf');
    Route::post('/payment', 'PaymentController@processPayment')->name('user.payment');

    //Dishes
    Route::post('dishes/create', 'DishController@create')->name('dish.create')->middleware('isAdmin');

    //Dishes Category
    Route::get('/dishes/category', 'DishCategoryController@index')->name('dish.category.get')->middleware('isAdmin');
});