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

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/eventspasses', function () {
    return view('events_passes');
});

Route::get('/eventmois', function () {
    return view('event_mois');
});

Route::get('/toparticles', function () {
    return view('toparticles');
});

Route::get('/boutique', 'ProduitController@index');

Route::get('/produits/{id}', 'ProduitController@store)')->name('produits');

Route::get('/produits/{id_produit}', 'ProduitController@add')->name('cart');

Route::get('/produitsuniques', function () {
    return view('produit_uniques');
});

Route::get('/createProduit', 'ProduitController@create');

Route::post('/createProduit', 'ProduitController@store');

Route::get('/createEvent', 'EvenementController@create');

Route::post('/createEvent', 'EvenementController@store');


/*Route::get('/creationevent', function () {
    return view('creation_event');
})->middleware('admin');

Route::group(['middleware' => ['admin']], function () {
    return view('creation_event');
});

Route::middleware(['admin', 'subscribed'])->group(function () {
    return view('creation_event');
});*/

