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

Auth::routes();


Route::group(['middleware' => 'web'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('home', 'HomeController@admin')->name('home');
        Route::get('admin', 'HomeController@admin')->name('admin');
    });
});

Route::get('lang/{lang}', function($lang){
	if (array_key_exists($lang, Config::get('languages'))) {
		Session::put('applocale', $lang);
	}
	return Redirect::back();
})->name('setlange');

include 'user.php';
include 'media.php';
include 'groupe.php';
include 'question.php';
include 'article.php';
include 'categorie.php';
include 'page.php';
include 'front.php';
include 'slider.php';