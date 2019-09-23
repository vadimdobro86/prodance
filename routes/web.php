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

use Illuminate\Support\Facades\Route as RouteAlias;

RouteAlias::view('/', 'welcome');

RouteAlias::view('/news','news');

RouteAlias::view('/events','events');

RouteAlias::view('/proDance','proDance');

RouteAlias::view('/masterClasses','masterClasses');

RouteAlias::view('/inventory','inventory');

RouteAlias::view('/forum','forum');



Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
