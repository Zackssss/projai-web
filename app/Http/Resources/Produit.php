<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Produit extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray();
        return [
            'id_produit' => $this->id,
            'nom_produit' => $this->nom_produit,
            'description_produit' => $this->description_produit,
            'prix' => $this->prix,

        ];
    }
}
