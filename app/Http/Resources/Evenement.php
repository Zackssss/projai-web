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
            'id_evenement' => $this->id,
            'nom_evenement' => $this->nom_evenement,
            'association' => $this->association,
            'description_evenement' => $this->description_evenement,
            'date_evenement' => $this->date_evenement,
            'reccurence' => $this->reccurence,
            'prix' => $this->prix,
        ];
    }
}
