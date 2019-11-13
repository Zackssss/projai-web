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
Route::get('produits','WorkshopController@index');

Route::get('produit','ProduitController@show');

Route::post('produit','ProduitController@store');

Route::put('produit','ProduitController@store');

Route::delete('produit','ProduitController@destroy');

Route::get('evenements','EvenementController@index');

Route::get('evenement','EvenementController@show');

Route::post('evenement','EvenementController@store');

Route::put('evenement','EvenementController@store');

Route::delete('evenement','EvenementController@destroy');
