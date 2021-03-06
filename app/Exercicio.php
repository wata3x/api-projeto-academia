<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];

    public function categoria()
    {
       return $this->belongsTo(Categoria::class);
    }
}
