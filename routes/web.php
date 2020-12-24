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
//Route::get('/', function () {
//    return view('site.home.index');
//});


Route::group(['prefix' => '/' , 'namespace' => 'site'], function () {
    Route::get('' , 'HomeController@index')->name('home');
});


Route::group(['prefix' => '/dashboard', 'namespace' => 'adminpanel'], function () {
   Route::get('' , 'HomeController@index')->name('adminPanel.home');

   Route::group(['prefix' => '/title'], function (){
       Route::get('' , 'TitleController@index')->name('admin.title.index');
       Route::get('/create' , 'TitleController@create')->name('admin.title.create');
       Route::post('/store' , 'TitleController@store')->name('admin.title.store');
       Route::get('/edit/{id}' , 'TitleController@edit')->name('admin.title.edit');
       Route::post('/update/{id}' , 'TitleController@update')->name('admin.title.update');
       Route::get('/destroy/{id}' , 'TitleController@destroy')->name('admin.title.destroy');
       Route::post('/save_image', 'TitleController@uploadImage');
   });
   Route::group(['prefix' => '/homeImage'], function (){
       Route::get('' , 'HomeImageController@index')->name('admin.homeImage.index');
       Route::get('/create' , 'HomeImageController@create')->name('admin.homeImage.create');
       Route::post('/store' , 'HomeImageController@store')->name('admin.homeImage.store');
       Route::get('/edit/{id}' , 'HomeImageController@edit')->name('admin.homeImage.edit');
       Route::post('/update/{id}' , 'HomeImageController@update')->name('admin.homeImage.update');
       Route::get('/destroy/{id}' , 'HomeImageController@destroy')->name('admin.homeImage.destroy');
   });
});


