<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MainControler@home')->name('home');
Route::get('/categories', 'MainControler@categories')->name('categories');

Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');

Route::get('/{category}', 'MainControler@category')->name('category');
Route::get('/category/{product?}', 'MainControler@product')->name('product');


