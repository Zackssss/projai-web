<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    // Définition des champs à modifier dans la BDD de la table commentaire

    protected $fillable = ['texte','visibilite_commentaire', 'user_id_createur_com', 'id_image'];


}
