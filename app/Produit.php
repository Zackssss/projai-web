<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // Définition des champs à modifier dans la BDD de la table produit

    protected $fillable = ['url_image_produit','nom_produit', 'description_produit', 'prix','nbr_de_vente','id_evenement'];

}
