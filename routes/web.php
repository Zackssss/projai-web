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

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/inscription', function () {
    return view('inscription');
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

Route::get('/boutique', function () {
    return view('boutique');
});

Route::get('/toparticles', function () {
    return view('toparticles');
});

Route::get('/produits', function () {
    return view('produits');
});

Route::get('/produitsuniques', function () {
    return view('produit_uniques');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/infoscontact', function () {
    return view('infoscontact');
});

Route::get('/conditions', function () {
    return view('conditions');
});

/*Route::get('/creationevent', function () {
    return view('creation_event');
})->middleware('admin');

Route::group(['middleware' => ['admin']], function () {
    return view('creation_event');
});

Route::middleware(['admin', 'subscribed'])->group(function () {
    return view('creation_event');
});*/

