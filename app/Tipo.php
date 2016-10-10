<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function usuarios()
    {
        $this->belongsToMany(Usuario::class);
    }
}
