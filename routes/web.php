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



Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/veiculo/{id}', 'CarController@show')->name('veiculo-detalhes');
Route::get('/lista', 'CarController@list')->name('lista-veiculos');


Route::group(['prefix' => 'painel', 'middleware' => ['auth', 'needsRole:user']], function () {

    Route::get('/dashboard/{id}', 'DashboardController@index')->name('dashboard');

});
