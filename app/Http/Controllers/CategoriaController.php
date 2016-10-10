<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function show($id)
    {
        return Categoria::find($id);
    }

    public function store(Request $request)
    {
        Categoria::create($request->all());
        return response()->json("", 201);
    }
}
