<?php

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
route::get('/produtos/edit/{id}', 'ProdutoController@edit')->where('id', '[0-9]+');
route::post('/produtos/update/{id}', 'ProdutoController@update')->where('id', '[0-9]+');
Route::get('/produtos/json', 'ProdutoController@json');