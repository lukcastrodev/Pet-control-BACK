<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function getPet()
    {
        return (count(Pets::all()) == 0) ? "Ainda não há pets nessa lista." : Pets::all();
    }

    public function getPetById($id)
    {
        return (empty(Pets::find($id))) ? "Pet não existe." : Pets::find($id);
    }

    public function postPet(Request $request)
    {
        $rgsPet = Pets::create([
            'nome' => $request->input('nome'),
            'tipo' => $request->input('tipo'),
            'sexo' => $request->input('sexo'),
            'raca' => $request->input('raca'),
            'peso' => $request->input('peso'),
            'cor' => $request->input('cor'),
            'descricao' => $request->input('descricao'),
            'cliente_id' => $request->input('cliente_id'),
        ]);
        return $rgsPet;
    }

    public function updatePet(Request $request, $id)
    {
        if (empty(Pets::find($id))) {
            echo "Pet não existe.";
        } else {
            $updtPet = Pets::findOrFail($id);
            $updtPet->update($request->all());

            return $updtPet;
        }
    }

    public function deletePet($id)
    {

        if (empty(Pets::find($id))) {
            echo "Pet não existe.";
        } else {
            Pets::find($id)->delete();
            echo "Pet excluído com sucesso.";
        }
    }
}
