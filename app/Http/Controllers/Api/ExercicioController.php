<?php

namespace App\Http\Controllers\Api;;

use App\Http\Controllers\Controller;
use App\Categoria;
use App\Exercicio;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExercicioController extends Controller
{
    public function salvarExercicio(Request $request, $categoriaId)
    {
        $categoria = Categoria::find($categoriaId);
        if(!$categoria) {
            return response()->json(['mensagem' => 'categoria não existe']);
        }
        $categoria->exercicio()->create($request->all());

        return response()->json(['mensagem' => 'exercicio criado'], 201);
    }

}
