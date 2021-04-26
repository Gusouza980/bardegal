<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            'nome' => 'Sherry Week',
        ]);

        DB::table('tags')->insert([
            'nome' => 'Tanino',
        ]);

        DB::table('tags')->insert([
            'nome' => 'Covid',
        ]);

        DB::table('tags')->insert([
            'nome' => 'Bordô',
        ]);
    }
}
