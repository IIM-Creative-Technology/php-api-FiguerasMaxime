<?php

namespace Database\Factories;

use App\Models\Prof;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prof::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'year_coming' => $this->faker->numberBetween($min = 2016, $max = 2021),

        ];
    }
}
