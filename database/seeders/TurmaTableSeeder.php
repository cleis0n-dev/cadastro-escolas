<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Turma;

class TurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turma::factory(5)->create();
    }
}
