<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function create()
    {
        return view('createComment');
    }

    public function store(){
        $commentaire = new Commentaire();
        $commentaire->texte = request('texte');
        $commentaire->visibilite_commentaire = 1;
        $commentaire->user_id_createur_com = 2;
        $commentaire->id_image = 101;
        $commentaire->save();
        return "Commentaire sauvegardé !";
    }
}
