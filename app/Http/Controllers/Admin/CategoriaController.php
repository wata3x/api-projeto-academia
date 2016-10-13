<?php

namespace App\Http\Controllers\Admin;

use Faker\Provider\File;
use Illuminate\Http\Request;

use App\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', [
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        return view('categoria.criar');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->create($request->all());

        $file = $request->file('imagem');
        $filename = $request['nome'] . '-' . $categoria->id . '.jpeg';
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }

        return redirect()->route('categoria.list');
    }
}
