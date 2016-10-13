<?php

namespace App\Http\Controllers\Api;;

use App\Http\Controllers\Controller;
use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaController extends Controller
{
    public function listarCategorias()
    {
        return Categoria::all();
    }

    public function mostrarCategoria($id)
    {
        return Categoria::find($id);
    }

    public function salvarCategoria(Request $request)
    {
        Categoria::create($request->all());
        return response()->json("", 201);
    }
}
