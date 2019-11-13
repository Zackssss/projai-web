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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('users','RegisterController@index');

Route::get('user/{id}','RegisterController@show');

Route::post('user','RegisterController@store');

Route::put('user/{id}','RegisterController@store');

Route::delete('user','RegisterController@destroy');

Route::get('produits','ProduitController@index');

Route::get('produit/{id}','ProduitController@show');

Route::post('produit','ProduitController@store');

Route::put('produit/{id}','ProduitController@store');

Route::delete('produit','ProduitController@destroy');

Route::get('evenements','EvenementController@index');

Route::get('evenement/{id}','EvenementController@show');

Route::post('evenement','EvenementController@store');

Route::put('evenement/{id}','EvenementController@store');

Route::delete('evenement','EvenementController@destroy');
