<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('boutique')-> with('produits', $produits);
    }

    public function add(Request $request, $id_produit){
        $produits = Produit::find($id_produit);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produits, $produits->id_produit);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('cart');
    }
    public function indexWithId()
    {
        $url = url()->full() ;
    
        $id=substr($url, -1);
        $produit = Produit::where('id_produit',$id)->get();
        return view('produits')-> with('Produit', $produit);
        
    }
    public function create()
    {
        return view('createProduit');
    }
    /*public function store(){
        Produit::firstOrCreate([
            'nom_produit' => request('nom_produit'),
            'description_produit' => request('description_produit'),
            'prix' => request('prix')
        ]);*/
    /* public function store(){
         $produit = new Produit();
         $produit->nom_produit = request('nom_produit');
         $produit->description_produit = request('description_produit');
         $produit->prix = request('prix');
         $produit->save();
         return "Produit sauvegardé !";
     }*/
    public function store(Request $request)
    {
        $produit = $request->isMethod('put') ? Produit::findOrFail($request->id) : new Produit();
        $produit->id = $request->input('id');
        $produit->nom_produit = $request->input('nom_produit');
        $produit->description_produit = $request->input('description_produit');
        $produit->prix = $request->input('prix');

        if ($produit->save()) {
            return new Produit($produit);
        }

    }
    public function show($id)
    {
        $produit = Produit::findOrFail($id);

        return new Produit($produit);
    }
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);

        return new Produit($produit);
    }
}
