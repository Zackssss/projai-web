<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class ProduitListeController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('boutique', ['produits' => $produits]);
    }

    public function store(Request $request){
        //$produits = Produit::find($id);//
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        //$cart->add($produits, $produits->id);//

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('produits');
    }

}
