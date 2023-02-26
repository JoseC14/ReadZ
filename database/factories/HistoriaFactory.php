<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historia>
 */
class HistoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'titulo'=> $this->faker->word,
            'imagem' => $this->faker->imageUrl(400,400),
            'sinopse' => $this->faker->text,
            'id_user' => User::pluck('id')->random()
        ];
    }
}
