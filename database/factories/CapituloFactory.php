<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Historia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Capitulo>
 */
class CapituloFactory extends Factory
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
            'conteudo' => $this->faker->text,
            'id_historia' => Historia::pluck('id')->random()
        ];
    }
}
