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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/panier', function () {
    return view('panier');
});*/

Route::get('/eventspasses', function () {
    return view('events_passes');
});

Route::get('/eventmois', function () {
    return view('event_mois');
});

/*Route::get('/boutique', function () {
    return view('boutique');
});*/

Route::get('/toparticles', function () {
    return view('toparticles');
});

Route::get('/conditions', function () {
    return view('conditions');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/infoscontact', function () {
    return view('infoscontact');
});

Route::get('/boutique', 'ProduitController@index');

Route::get('/produits/{id}', 'ProduitController@indexWithId');

Route::get('/cart/{id}', 'ProduitController@addCart') ->name ('addCart');

//Route::get('/shopping-cart', 'ProduitController@shoppingCart') ->name ('shoppingCart');//

Route::get('/boutique', function () {
    return view('boutique');
});

Route::get('/createProduit', 'ProduitController@create');

Route::post('/createProduit', 'ProduitController@store');

Route::get('/createEvent', 'EvenementController@create');

Route::post('/createEvent', 'EvenementController@store');

//Route::ressource


/*Route::get('/creationevent', function () {
    return view('creation_event');
})->middleware('admin');

Route::group(['middleware' => ['admin']], function () {
    return view('creation_event');
});

Route::middleware(['admin', 'subscribed'])->group(function () {
    return view('creation_event');
});*/

