<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nome = 'Peito';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome = 'Costas';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome = 'Ombro';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome = 'Perna';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome = 'Trapézio';
        $categoria->save();
    }
}
