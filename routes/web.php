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

Route::get('/', 'PizzaController@home');
Route::get('/main', 'PizzaController@main');
Route::get('/index', 'PizzaController@index');

Route::get('/about', 'PizzaController@about');

Route::get('/pages/create', 'PizzaController@create');
// Route::get('/pages/show', 'PizzaController@show');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pages/show/{id}', 'PizzaController@show');
