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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/indexsb', function () {
    return view('tema.layoutBase');
});
Route::get('/novo', function () {
    return view('novo');
});

// Usuario
Route::prefix('cliente')->group(function () {
    Route::get('index', 'clienteController@index');
    Route::get('novo', 'clienteController@create');
});