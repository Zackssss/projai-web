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

Route::post('/login', 'Auth\LoginController@callJson');

Route::get('/home', 'HomeController@index')->name('home');
//affiche la pages welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome/déco', function () {
    session_destroy();
    return view('welcome');
});

Route::get('/panier', function () {
    return view('panier');
});
// Permet d'afficher les evenements passer
Route::get('/eventspasses', 'EvenementController@Eventpassé');
// Permet d'afficher un evenement par son id
Route::get('/evenements/{id}', 'EvenementController@eventcemois');
// Permet de cacher un commentaire d'evenement
Route::get('/evenementscacher/{idcom}/{idevent}', 'EvenementController@ComHide');
// Permet d'afficher les evenements pas passé
Route::get('/eventmois','EvenementController@EventMois' );
// Permet de téllécharger un json des données d'images du site
Route::get('/dljsonimage','ImageController@dlimagejson' );
// Permet de téllécharger un json des données d'un evenement
Route::get('/dljsonevent/{id}','EvenementController@downloadJSONFile' );
// Permet de téllécharger un json des données d'un produit
Route::get('/dljsonprod/{id}','ProduitController@dljsonprod' );

Route::get('/conditions', function () {
    return view('conditions');
});
// Permet d'envoyer un mail a la finalisation d'une commande de panier
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
// Permet d'afficher la boutique
Route::get('/boutique/Id', 'ProduitController@Id');

Route::get('/boutique', 'ProduitController@Id')->name('boutique');
// Permet d'afficher la boutique en la triant par prix
Route::get('/boutique/prix', 'ProduitController@TriBoutiquePrix');
// Permet d'afficher la boutique en la triant par les evenements
Route::get('/boutique/event', 'ProduitController@TriBoutiqueEvent');
// Permet d'afficher la boutique en affichant les produits lier a aucun evenement
Route::get('/boutique/notevent', 'ProduitController@TriBoutiqueNotEvent');
// Permet d'afficher le top 3 des articles
Route::get('/toparticles', 'ProduitController@indextop3');

Route::get('/boutique', 'ProduitController@index') ->name('boutique');
// Permet d'afficher les produits en les triant par id
Route::get('/produits/{id}', 'ProduitController@indexWithId');

Route::get('/cart/{id}', 'ProduitController@addCart') ->name ('addCart');

Route::get('/add/{id}', 'ProduitController@addInCart') ->name ('addInCart');

Route::get('/reduce/{id}', 'ProduitController@reduceCart') ->name ('reduceCart');

Route::get('/remove/{id}', 'ProduitController@removeCart') ->name ('removeCart');

Route::get('/shopping-cart', 'ProduitController@shoppingCart') ->name ('shoppingCart');

Route::get('/createProduit', 'ProduitController@create');

Route::post('/createProduit', 'ProduitController@store');

Route::get('/createComment', 'CommentaireController@create');

Route::post('/createComment', 'CommentaireController@store');

Route::get('/createImage', 'ImageController@create');

Route::post('/createImage', 'ImageController@store');

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

