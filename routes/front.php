<?php

Route::get('/', 'HomeController@index')->name('front_home');

Route::get('/articles', 'HomeController@articles')->name('front_articles');
Route::get('/{cat}/articles', 'HomeController@cat_articles')->name('front_cat_articles');
Route::get('/article/{lien}', 'HomeController@article')->name('front_article');

Route::get('/page/{link}', 'PageController@front')->name('page_front');

Route::get('/slider/{link}', 'SliderController@front')->name('slider_front');

