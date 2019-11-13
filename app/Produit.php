<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   // protected $fillable = ['nom_produit', 'description_produit', 'prix'];//

    public function toArray()
    {
        //return parent::toArray();
        return [
            'id_produit' => $this->id,
            'nom_produit' =>$this->nom_produit,
            'description_produit' =>$this->description_produit,
            'prix' =>$this->prix,
        ];
    }
}
