<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'sexo',
        'raca',
        'peso',
        'cor',
        'descricao',
        'cliente_id'
    ];
}
