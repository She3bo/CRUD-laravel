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
    return view('welcome');
});
Route::get('/product', 'productController@insert');
Route::post('/product', 'productController@save');

Route::get('/read', 'productController@read');
//Route::get('/read', 'productController@read');

Route::get('/edit', ['as' => 'getAllSearchPublications',
                     'uses' => 'productController@edit']);
Route::get('/delete',['as' => 'getAllSearchPublications',
                       'uses' => 'productController@delete']);
Route::post('/update', ['as' => 'getAllSearchPublications',
                                'uses' => 'productController@update']);

