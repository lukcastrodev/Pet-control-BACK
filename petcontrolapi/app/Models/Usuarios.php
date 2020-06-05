<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = [
        'nome',
        'cpf', 
        'email', 
        'perfil', 
        'senha', 
    ];

    protected $attributes = ['perfil' => false];

    protected $hidden = ['senha'];
}
