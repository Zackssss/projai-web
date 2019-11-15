<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['texte','visibilite_commentaire', 'user_id_createur_com', 'id_image'];


}
