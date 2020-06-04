<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getCliente()
    {
        return (count(Clientes::all()) == 0)? "Ainda não há clientes nessa lista." : Clientes::all();
    }

    public function getClienteById($id)
    {
        return (empty(Clientes::find($id))) ? "Cliente não existe." : Clientes::find($id);
    }

    public function postCliente(Request $request)
    {
        $rgsCliente = Clientes::create([
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
        return $rgsCliente;
    }

    public function updateCliente(Request $request, $id)
    {
        if (empty(Clientes::find($id))) {
            echo "Cliente não existe.";
        } else {
            $updtCliente = Clientes::findOrFail($id);
            $updtCliente->update($request->all());

            return $updtCliente;
        }
    }

    public function deleteCliente($id)
    {

        if (empty(Clientes::find($id))) {
            echo "Cliente não existe.";
        } else {
            Clientes::find($id)->delete();
            echo "Cliente excluído com sucesso.";
        }
    }
}
