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


Route::group(['middleware' => 'cors'], function() {


Route::get('/', 'SiteController@index')->name('home');

Route::get('/changeLanguage/{lang}' , 'SiteController@changeLanguage')->name('lang');
Route::get('/product/{id}' , 'ProductController@show')->name('details');;
Route::get('/product/favorite/{id}' , 'ProductController@favorite')->name('favorite');;

Route::get('/products/{id}' , 'ProductController@products')->name('products');;

Route::get('/products/{id}/comment' , 'ProductController@comment')->name('products.comment');;



Route::get('/corporates/create' , 'CorporateController@create')->name('corporates.create');;
Route::post('/corporates/store' , 'CorporateController@store')->name('corporates.store');;


// Route::get('/my/favorite' , 'FavoriteController@favorite')->name('favorite');;



Route::group(['namespace' => 'Users' , 'middleware' => 'guest'  , 'prefix' => 'auth'] , function(){
    //   Route::get('/login' , '')->name('admin.login');
        Route::get('/login' , 'LoginController@login')->name('login');;
        Route::post('/login' , 'LoginController@postLogin')->name('post.login');

        Route::get('/register-type' , 'LoginController@registerType')->name('register.type');
        Route::get('/register' , 'LoginController@register')->name('register');;

        Route::post('/register' , 'LoginController@postRegister')->name('post.register');

        Route::get('/profile' , 'LoginController@profile')->name('profile');

        Route::get('/logout' , 'LoginController@logout')->name('logout');
    });

    
});
