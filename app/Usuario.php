<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipos()
    {
        return $this->belongsToMany(Tipo::class);
    }

    public function temAlgumTipo($tipos)
    {
        if (is_array($tipos)) {
            foreach ($tipos as $tipo) {
                if ($this->temTipo($tipo)) {
                    return true;
                }
            }
        } else {
            if ($this->temTipo($tipos)) {
                return true;
            }
        }
        return false;
    }

    public function temTipo($tipo)
    {
        if ($this->tipos()->where('nome', $tipo)->first()) {
            return true;
        }
        return false;
    }
}
