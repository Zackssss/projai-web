<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = ['id_image','chemin','visibilite_image','user_id_createur_img','id_evenement'];
}
