<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getCliente()
    {

        return Clientes::all();
    }

    public function postCliente(Request $request, Clientes $cliente)
    {
        $cliente = Clientes::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),
            'data_nascimento' => $request->input('data_nascimento'),
            'cep' => $request->input('cep'),
            'endereco' => $request->input('endereco'),
            'numero' => $request->input('numero'),
            'complemento' => $request->input('complemento'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);
        return $cliente;
    }
}
