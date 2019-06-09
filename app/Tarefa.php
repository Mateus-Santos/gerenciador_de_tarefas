<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    

    public function tipo_tarefa()
    {
        return $this->belongsTo('App\Tipo_tarefa');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
