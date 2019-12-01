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
    return view('index');
});

Route::get('/', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create');
Route::post('/contact/store', 'ContactController@store');
Route::get('/contact/edit/{id}', 'ContactController@update');
Route::put('/contact/update/{id}', 'ContactController@put');
Route::get('/contact/delete/{id}', 'ContactController@delete');
Route::get('/contact/detail/{id}', 'ContactController@detail');

Route::get('/group', 'GroupController@index');
Route::get('/group/create', 'GroupController@create');
Route::post('/group/store', 'GroupController@store');
Route::get('/group/edit/{id}', 'GroupController@update');
Route::put('/group/update/{id}', 'GroupController@put');
Route::get('/group/delete/{id}', 'GroupController@delete');
