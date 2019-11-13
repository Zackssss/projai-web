<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitListeController extends Controller
{
    public function index()
    {
        $produitliste = ProduitListe:all();
        
    }
}
