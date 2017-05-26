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
use App\Type;

Route::get('/', function () {
    return Type::all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pizza', 'ItemController@pizza');
Route::get('/snacks', 'ItemController@snacks');
Route::get('/beverages', 'ItemController@beverages');


Route::get('/additem/{id}', 'ItemController@addToBasket');
Route::get('mysessiondata', 'ItemController@seeMySessionData');
Route::get('mybasket', 'ItemController@displayBasket');
Route::get('/mybasket/remove/{key}', 'ItemController@removeFromBasket');
