<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'nome' => 'Política',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Vinho',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Comida',
        ]);
    }
}
