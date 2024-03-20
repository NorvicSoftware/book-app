<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gender;
use App\Models\Editorial;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(35),
            'subtitle' => $this->faker->text(100),
            'numberPage' => $this->faker->numberBetween(200,500),
            'language' => $this->faker->randomElement(['Español', 'Ingles', 'Portugues']),
            'description' => $this->faker->text(250),
            'status' => $this->faker->randomElement(['Activo', 'Bloqueado']),
            'price' => $this->faker->randomNumber(8),
            'gender_id' => Gender::all()->random()->id,
            'editorial_id' => Editorial::all()->random()->id,
        ];
    }
}
