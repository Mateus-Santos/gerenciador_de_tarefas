<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_tarefa extends Model
{
    public function tarefa()
    {
        return $this->hasMany('App\Tarefa');
    }
}
