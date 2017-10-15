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

Route::get('/', 'MainController@Index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@Profile');
    Route::post('/profile', 'UserController@UpdateProfile');
    Route::post('/company', 'CompanyController@CreateCompany');

    Route::get('/events', 'EventController@Events');
    Route::get('/event/{id}', 'EventController@Event');
    Route::get('/event/create', 'EventController@ShowCreate');
    Route::post('/event/create', 'EventController@CreateEvent');

    Route::get('company/{id}', 'CompanyController@Company');
});
