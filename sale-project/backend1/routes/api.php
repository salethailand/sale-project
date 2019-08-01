<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars', 'CarController@index');
// Route::get('/players/{id}', 'PlayerController@show');
// Route::post('/players', 'PlayerController@store');
// Route::post('/players/{id}/answers', 'PlayerController@answer');
// Route::delete('/players/{id}', 'PlayerController@delete');
// Route::delete('/players/{id}/answers', 'PlayerController@resetAnswers');

Route::get('/users', 'UsersController@index');
Route::post('/users/create', 'UsersController@store');
Route::get('/users/edit/{id}', 'UsersController@edit');
Route::post('/users/update/{id}', 'UsersController@update');
Route::delete('/users/delete/{id}', 'UsersController@delete');

Route::get('/templates', 'CategoryTemplatesController@index');
Route::post('/templates/create', 'CategoryTemplatesController@store');
Route::get('/templates/edit/{id}', 'CategoryTemplatesController@edit');
Route::post('/templates/update/{id}', 'CategoryTemplatesController@update');
Route::delete('/templates/delete/{id}', 'CategoryTemplatesController@delete');

Route::get('/subcategory', 'SubCategoriesController@index');
Route::post('/subcategory/create', 'SubCategoriesController@store');
Route::get('/subcategory/edit/{id}', 'SubCategoriesController@edit');
Route::post('/subcategory/update/{id}', 'SubCategoriesController@update');
Route::delete('/subcategory/delete/{id}', 'SubCategoriesController@delete');
Route::get('/subcategory/getcategory', 'SubCategoriesController@getcategory');
Route::post('/subcategory/getsubcategory/{parentname}', 'SubCategoriesController@getsubcategory');