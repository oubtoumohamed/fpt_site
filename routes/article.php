<?php

Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => 'auth','prefix' => '/admin/article/'], function () {

        Route::get('list', 'ArticleController@index')
            ->name('article')
            ->middleware('Admin:Article');
        
        Route::get('create', 'ArticleController@create')
            ->name('article_create')
            ->middleware('Admin:Article');
        
        Route::post('create', 'ArticleController@store')
            ->name('article_store')
            ->middleware('Admin:Article');
        
        Route::get('{id}/delete', 'ArticleController@destroy')
            ->name('article_delete')
            ->middleware('Admin:Article')
            ->where('id', '[0-9]+');
        
        /*Route::get('{id}', 'ArticleController@show')
            ->name('article_show')
            ->middleware('Admin:Article')
            ->where('id', '[0-9]+');*/
        
        Route::get('{id}/edit', 'ArticleController@edit')
            ->name('article_edit')
            ->middleware('Admin:Article')
            ->where('id', '[0-9]+');

        Route::get('{id}', 'ArticleController@edit')
            ->name('article_show')
            ->middleware('Admin:Article')
            ->where('id', '[0-9]+');
        
        Route::post('{id}', 'ArticleController@update')
            ->name('article_update')
            ->middleware('Admin:Article')
            ->where('id', '[0-9]+');
        
    });
});