<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Capitulo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'conteudo'   => $this->faker->text,
            'id_user'    => User::pluck('id')->random(),
            'id_capitulo'=> Capitulo::pluck('id')->random(),
        ];
    }
}
