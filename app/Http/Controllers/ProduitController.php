<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        
        $produit = Produit::all();
        return view('boutique')-> with('Produit', $produit);
        
    }
    public function indexWithId()
    {
        $url = url()->full() ;
    
        $id=substr($url, -1);
        $produit = Produit::where('id_produit',$id)->get();
        return view('produits')-> with('Produit', $produit);
        
    }

    public function indextop3()
    {
        $produit = Produit::all();
        $produit = $produit->sortByDesc('nbr_de_vente');
        return view('toparticles')-> with('Produit', $produit);





    }
    public function Id()
    {
        $produit = Produit::all();
        $produit = $produit->sortBy('id_produit');
        return view('boutique')-> with('Produit', $produit);


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
