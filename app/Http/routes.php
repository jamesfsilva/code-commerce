<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin/products'], function(){
    get('/',['as' => 'products.index', 'uses' =>  'AdminProductsController@index']);
    get('/create',['as' => 'products.create', 'uses' =>  'AdminProductsController@create']);
    post('/save',['as' => 'products.save', 'uses' =>  'AdminProductsController@save']);
    get('/{id}/edit',['as' => 'products.edit', 'uses' =>  'AdminProductsController@edit']);
    put('/{id}/update',['as' => 'products.update', 'uses' =>  'AdminProductsController@update']);
    get('/{id}/delete',['as' => 'products.delete', 'uses' =>  'AdminProductsController@delete']);
});


Route::group(['prefix' => 'admin/categories'], function(){
    get('/',['as' => 'categories.index', 'uses' =>  'AdminCategoriesController@index']);
    get('/create',['as' => 'categories.create', 'uses' =>  'AdminCategoriesController@create']);
    post('/save',['as' => 'categories.save', 'uses' =>  'AdminCategoriesController@save']);
    get('/{id}/edit',['as' => 'categories.edit', 'uses' =>  'AdminCategoriesController@edit']);
    put('/{id}/update',['as' => 'categories.update', 'uses' =>  'AdminCategoriesController@update']);
    get('/{id}/delete',['as' => 'categories.delete', 'uses' =>  'AdminCategoriesController@delete']);
});

