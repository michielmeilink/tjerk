<?php

//GET
//PUT
//PATCH
//DELETE
//POST

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('thuis');

Route::get('/products/new', 'ProductsController@new')->name('new_product');
Route::post('/products/new', 'ProductsController@save');

Route::get('/products', 'ProductsController@index');
