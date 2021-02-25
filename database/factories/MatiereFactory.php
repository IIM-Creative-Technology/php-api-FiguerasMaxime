<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matiere::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(2),
            'date_start' => $this->faker->dateTimeAd($max = '2020-09-01', $timezone = null),
            'date_end' => $this->faker->dateTimeAd($max = '2021-09-01', $timezone = null),
            'prof_id' => $this->faker->numberBetween($min=1, $max=10),
            'classe_id' => $this->faker->numberBetween($min=1, $max=5),

        ];
    }
}
