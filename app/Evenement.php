<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    //protected $fillable = ['nom_evenement', 'association', 'description_evenement', 'date_evenement', 'reccurence', 'prix'];//

    public function toArray()
    {
        //return parent::toArray();
        return [
            'id_evenement' => $this->id,
            'nom_evenement' =>$this->nom_evenement,
            'association' =>$this->association,
            'description_evenement' =>$this->description_evenement,
            'date_evenement' =>$this->date_evenement,
            'reccurence' =>$this->reccurence,
            'prix' =>$this->prix,
        ];
    }
}
