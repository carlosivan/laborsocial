<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// vistas normales
Route::resource('/','PaginaController@index');
Route::get('articulos/{id?}','PaginaController@articulos');
Route::get('articulo/{id?}','PaginaController@articulo');
Route::get('admin','PaginaController@admin');

// para angular
Route::get('categoria','AngularController@categoria');
Route::get('aarticulos','AngularController@articulos');
Route::get('aarticulo','AngularController@articulo');
Route::get('fotos','AngularController@fotos');

Route::get('borrararticulo','AngularController@borrararticulo');
Route::get('borrarcategoria','AngularController@borrarcategoria');
Route::get('borrarfoto','AngularController@borrarfoto');

Route::post('agregarcategoria','AngularController@agregarcategoria');
Route::post('agregararticulo','AngularController@agregararticulo');
Route::post('agregarimagen','AngularController@agregarimagen');

