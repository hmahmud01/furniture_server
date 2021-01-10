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
// Email url
Route::post('sendemaildata', 'GalleryController@emaildata')->name('galery.data');
Route::post('emailShare', 'GalleryController@emailShare')->name('gallery.emailshare');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('adminpanel', 'AdminController')->middleware('auth');
Route::post('admin', 'AdminController@index')->middleware('auth');
Route::post('adminUpdate', 'GalleryController@demoupadate')->name('galery.update')->middleware('auth');
Route::resource('password', 'PasswordController')->middleware('auth');
Route::post('passwordUpdate', 'PasswordController@customUpdate')->name('password.update')->middleware('auth');
Route::post('redirect', 'PasswordController@redirectPage')->name('password.redirectPage');
