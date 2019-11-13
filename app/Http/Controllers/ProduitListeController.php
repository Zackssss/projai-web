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
        $produit = Produit::all();
        return view('boutique', ['produit' => $produit]);
    }

    public function store(Request $request, $id){
        $produit = Produit::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $produit->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('produit');
    }

}
