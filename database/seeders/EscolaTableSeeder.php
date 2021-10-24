<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Escola;

class EscolaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escola::factory(5)->create();
    }
}
