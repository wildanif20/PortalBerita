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

Route::get('/', function () {
    return view('welcome');
});

//News Route
Route::resource('/News', 'NewsController');

//News Route Custome
Route::get('/AddNews', 'NewsController@formNews')->name('formNews');
// Route::get('/UpdateNews', 'NewsController@formUpdate')->name('formUpdate');