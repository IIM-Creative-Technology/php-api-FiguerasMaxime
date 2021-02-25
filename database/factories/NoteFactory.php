<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'result' => $this->faker->biasedNumberBetween($min = 0, $max = 20, $function = 'sqrt'),
            'student_id' => $this->faker->numberBetween($min=1, $max=30),
            'matiere_id' => $this->faker->numberBetween($min=1, $max=15),
        ];
    }
}
