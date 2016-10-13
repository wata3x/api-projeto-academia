<?php

namespace App\Http\Controllers\Api;

use App\Dieta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DietaController extends Controller
{
    public function listarDietas()
    {
        //retorna dietas somente do usuario logado
        return Auth::User()->dieta;
    }

    public function salvarDieta(Request $request)
    {	
    	//salva uma dieta pegando o id do usuário logado
    	Auth::User()->dieta()->create($request->all());
    }

    public function mostrarDieta($id)
    {
        return Dieta::find($id);
    }
}
