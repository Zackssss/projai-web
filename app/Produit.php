<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['url_image_produit','nom_produit', 'description_produit', 'prix','nbr_de_vente','id_evenement'];


}
