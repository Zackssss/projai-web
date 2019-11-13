<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['url_image','nom_produit', 'description_produit', 'prix'];


}
