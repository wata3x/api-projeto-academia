<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Tipo;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_cliente = Tipo::where('nome', 'Cliente')->first();
        $tipo_admin = Tipo::where('nome', 'Admin')->first();

        $usuario = new Usuario();
        $usuario->nome = 'Fellipe Rocha';
        $usuario->email = 'felliperocha@test.com';
        $usuario->password = bcrypt('123456');
        $usuario->save();
        $usuario->tipo()->attach($tipo_admin);

        $usuario = new Usuario();
        $usuario->nome = 'Victoria Neves';
        $usuario->email = 'vivi@test.com';
        $usuario->password = bcrypt('123456');
        $usuario->save();
        $usuario->tipo()->attach($tipo_cliente);
    }
}
