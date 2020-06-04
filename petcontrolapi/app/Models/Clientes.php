<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nome',
        'email', 
        'telefone', 
        'cpf', 
        'data_nascimento', 
        'cep', 
        'endereco', 
        'numero', 
        'complemento', 
        'cidade', 
        'estado'
    ];
}
