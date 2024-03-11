<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nombre_curso' => $this->faker->sentence,
            'portada' => $this->faker->imageUrl(),
            'contenido' => $this->faker->text(10),
        ];
    }
}
