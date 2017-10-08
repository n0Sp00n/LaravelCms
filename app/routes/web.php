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

// Regular users interface
Route::group(['prefix' => 'user'], function()
{
    Route::get('login', 'NonAdminLoginController@getLogin'); // non_admin@gmail.com
    Route::post('login', 'NonAdminLoginController@postLogin'); // non_admin@gmail.com
});

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => [
    'admin', 'non-admin'
    ]], function()
{
    //Route::get('dashboard', 'Admin\AdminController@index');

    // Dick CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('beer', 'Admin\BeerCrudController');
});

// Frontend routes
Route::get('/beers', function () {
    return view('Beer')->with("beers", \App\Models\Beer::all());
});
