<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);

    }
}
