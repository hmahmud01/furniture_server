<?php

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

Route::get('/', function () {
    return view('site/index');
});

Route::get('categories', function () {
    return view('site.category');
});

Route::get('about-us', function () {
    return view('site.about-us');
});

Route::get('furniture-member', function(){
    return view('site.vip');
});


Route::resource('gallery', 'GalleryController');
Route::resource('admin', 'AdminController');
Route::post('adminUpdate', 'GalleryController@demoupadate')->name('galery.update');
Route::resource('password', 'PasswordController');