<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerfilCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('xxx')->insert([
            'id_cliente' => rand(1,10),
            'Nombre'=>Str::random(10),
            'Apellido'=>Str::random(10),
            'Direccion'=>Str::'Av.'.random(10),

        ]);
    }
}
