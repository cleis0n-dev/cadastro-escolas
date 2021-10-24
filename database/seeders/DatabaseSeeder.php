<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EscolaTableSeeder::class,
            TurmaTableSeeder::class,
            AlunoTableSeeder::class,
            AlunoTurmaTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
