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

// Route::get('/', function () {
//     return view('layouts.layout-principal');
// });

Route::get('/', 'ContatoController@index')->name('lista-contatos');
Route::get('/contato-create', 'ContatoController@create')->name('novo-contato');
Route::post('/contato-save', 'ContatoController@save')->name('save-contato');
Route::get('/contato-delete/{id_contato}', 'ContatoController@delete')->name('delete-contato');
Route::get('/contato-show/{id_contato}', 'ContatoController@show')->name('show-contato');
Route::put('/contato-update/{id_contato}', 'ContatoController@update')->name('update-contato');
