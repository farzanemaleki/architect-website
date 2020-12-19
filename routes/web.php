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
       Route::get('/store/{id}' , 'TitleController@store')->name('admin.title.store');
       Route::get('/edit/{id}' , 'TitleController@edit')->name('admin.title.edit');
   });
});


