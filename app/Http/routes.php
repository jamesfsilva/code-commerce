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

Route::group(['prefix' => 'categories'], function(){
    get('/',['as' => 'categories.index', 'uses' =>  'CategoriesController@index']);
    get('/create',['as' => 'categories.create', 'uses' =>  'CategoriesController@create']);
    post('/save',['as' => 'categories.save', 'uses' =>  'CategoriesController@save']);
    get('/{id}/edit',['as' => 'categories.edit', 'uses' =>  'CategoriesController@edit']);
    put('/{id}/update',['as' => 'categories.update', 'uses' =>  'CategoriesController@update']);
    get('/{id}/delete',['as' => 'categories.delete', 'uses' =>  'CategoriesController@delete']);
});
