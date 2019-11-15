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

Route::post('/register', 'Auth\RegisterController@callJson');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/eventspasses', 'EvenementController@Eventpassé');

Route::get('/evenements/{id}', 'EvenementController@eventcemois');
Route::get('/evenementscacher/{idcom}/{idevent}', 'EvenementController@ComHide');
Route::get('/evenementscacher/{id}', 'EvenementController@eventcemois');
Route::get('/eventmois','EvenementController@EventMois' );
Route::get('/dljsonimage','ImageController@dlimagejson' );
Route::get('/dljsonevent/{id}','EvenementController@downloadJSONFile' );
Route::get('/dljsonprod/{id}','ProduitController@dljsonprod' );
Route::get('/conditions', function () {
    return view('conditions');
});

Route::get('send-mail/{prix}', function ($prix) {
    
    $details = [
        'title' => 'Voila ma commande!',
        'body' => 'Le panier vaut'.$prix.'€'
    ];
   
    \Mail::to('valireinb@gmail.com')->send(new \App\Mail\MailPourBde($details));
   
    return view('welcome');

});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/infoscontact', function () {
    return view('infoscontact');
});

Route::get('/polconfidentialite', function (){
    return view('polconfidentialite');
});

Route::get('/boutique/Id', 'ProduitController@Id');

Route::get('/boutique', 'ProduitController@Id')->name('boutique');

Route::get('/boutique/prix', 'ProduitController@TriBoutiquePrix');

Route::get('/boutique/event', 'ProduitController@TriBoutiqueEvent');

Route::get('/boutique/notevent', 'ProduitController@TriBoutiqueNotEvent');

Route::get('/toparticles', 'ProduitController@indextop3');

Route::get('/boutique', 'ProduitController@index') ->name('boutique');

Route::get('/produits/{id}', 'ProduitController@indexWithId');

Route::get('/cart/{id}', 'ProduitController@addCart') ->name ('addCart');

Route::get('/add/{id}', 'ProduitController@addInCart') ->name ('addInCart');

Route::get('/reduce/{id}', 'ProduitController@reduceCart') ->name ('reduceCart');

Route::get('/remove/{id}', 'ProduitController@removeCart') ->name ('removeCart');

Route::get('/shopping-cart', 'ProduitController@shoppingCart') ->name ('shoppingCart');

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

