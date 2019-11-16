<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    // Définition des champs à modifier dans la BDD de la table évènement

    protected $fillable = ['id_evenement','nom_evenement', 'association', 'description_evenement', 'date_evenement', 'recurence', 'date_creation', 'user_id'];


}
