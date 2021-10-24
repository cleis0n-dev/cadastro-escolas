<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AlunoTurma;

class AlunoTurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlunoTurma::factory(5)->create();
    }
}
