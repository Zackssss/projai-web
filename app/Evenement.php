<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = ['id_evenement','nom_evenement', 'association', 'description_evenement', 'date_evenement', 'reccurence', 'user_id'];
}
