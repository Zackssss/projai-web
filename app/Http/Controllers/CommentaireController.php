<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller

{
    //Renvoie vers la vue de la création de commentaire

    public function create()
    {
        return view('createComment');
    }

    //Permet d'envoyer les informations écrites et définies vers la BDD dans la table commmentaire.

    public function store(){
        $commentaire = new Commentaire();
        $commentaire->texte = request('texte');
        $commentaire->visibilite_commentaire = 1;
        $commentaire->user_id_createur_com = 2;
        $commentaire->id_image = request('id_image');
        $commentaire->save();
        return "Commentaire sauvegardé !";
    }
}
