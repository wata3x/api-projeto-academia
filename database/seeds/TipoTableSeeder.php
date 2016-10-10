<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_cliente = new Tipo();
        $tipo_cliente->nome = 'Cliente';
        $tipo_cliente->save();

        $tipo_admin = new Tipo();
        $tipo_admin->nome = 'Admin';
        $tipo_admin->save();
    }
}
