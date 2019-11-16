<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Définition des champs à modifier dans la BDD de la table image

    protected $fillable = ['id_image','chemin','visibilite_image','user_id_createur_img','id_evenement'];
}
