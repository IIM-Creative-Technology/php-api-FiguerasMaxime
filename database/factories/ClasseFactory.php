<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Groupe n°' . $this->faker->unique()->numberBetween($min = 1, $max = 5),
            'promotion_year' => $this->faker->numberBetween($min = 2020, $max = 2026),
        ];
    }
}
