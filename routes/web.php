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

Route::get('/read', 'NavController@read');
Route::get('/create', 'NavController@create');
Route::post('/created', 'StockController@CreateOne');
Route::post('/deleted', 'StockController@DeleteOne');
Route::post('/updated', 'StockController@UpdateOne');
Route::post('/update', 'NavController@update');
Route::get('/createGenre', 'NavController@createGenre');
Route::post('/createdGenre', 'StockController@CreateGenre');
Route::post('/deletedGenre', 'StockController@DeleteGenre');