<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/categoria', 'CategoriasController');
Route::resource('/sucursal', 'SucursalesController');
Route::resource('/producto', 'ProductosController');
Route::get('/stock/{id}', 'StockController@index');
Route::get('/stock/asignarstock/{id}', 'StockController@create');
Route::post('/stock', 'StockController@store');
Route::get('/producto/{id}/editar', 'ProductosController@editar');
Route::get('miniatura/{filename}', 'ProductosController@getImagen');
Route::get('miniaturasucursal/{filename}', 'SucursalesController@getImagen');

Route::get('/buscar/{search?}','ProductosController@search')->name('buscar');