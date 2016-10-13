<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
