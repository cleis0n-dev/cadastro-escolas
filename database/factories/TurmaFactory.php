<?php

namespace Database\Factories;

use App\Models\Turma;
use App\Models\Escola;
use Illuminate\Database\Eloquent\Factories\Factory;

class TurmaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Turma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nivel' => 'fundamental',
            'serie' => '3',
            'turno' => 'Manhã',
            'ano' => date('Y'),
            'escola_id' => Escola::all()->random()->id
        ];
    }
}
