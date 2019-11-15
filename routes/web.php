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

Route::get('/inventory/create','inventoryController@create');
Route::post('/inventory/{inventory}/store','InventoryController@store');
Route::post('/inventory/{inventory}/delete','inventoryController@delete');
Route::get('/word','ReportsController@word');
Route::get('/excel','ReportsController@excel');
