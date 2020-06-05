<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getUsuario()
    {
        return (count(Usuarios::all()) == 0) ? "Ainda não há usuários nessa lista." : Usuarios::all();
    }

    public function getUsuarioById($id)
    {
        return (empty(Usuarios::find($id))) ? "Usuario não existe." : Usuarios::find($id);
    }

    public function postUsuario(Request $request)
    {
        $rgsUsuario = Usuarios::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'perfil' => $request->input('perfil'),
            'senha' => $request->input('senha'),
            
        ]);
        return $rgsUsuario;
    }

    public function updateUsuario(Request $request, $id)
    {
        if (empty(Usuarios::find($id))) {
            echo "Usuário não existe.";
        } else {
            $updtUsuario = Usuarios::findOrFail($id);
            $updtUsuario->update($request->all());

            return $updtUsuario;
        }
    }

    public function deleteUsuario($id)
    {

        if (empty(Usuarios::find($id))) {
            echo "Usuário não existe.";
        } else {
            Usuarios::find($id)->delete();
            echo "Usuário excluído com sucesso.";
        }
    }
}
