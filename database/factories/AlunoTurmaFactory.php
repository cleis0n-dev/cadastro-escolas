<?php

namespace Database\Factories;

use App\Models\AlunoTurma;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\Escola;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoTurmaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AlunoTurma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_aluno' => Aluno::all()->random()->id,
            'id_turma' => Turma::all()->random()->id,
            'id_escola' => Escola::all()->random()->id,
        ];
    }
}
