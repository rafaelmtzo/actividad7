<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        $groups = ['principiante', 'intermedio', 'avanzado'];
        $titles = ['Introducción a la robótica', 'Programación de robots', 'Control de motores', 'Sensores y actuadores', 'Proyectos de robótica'];

        return [
            'title' => $this->faker->unique()->randomElement($titles),
            'cover_image' => 'https://via.placeholder.com/350x200', // Una URL de imagen de muestra
            'content' => $this->faker->paragraphs(3, true), // Genera 3 párrafos de texto
            'group_id' => $this->faker->randomElement($groups), // Asigna aleatoriamente un grupo
            'kit_id' => $this->faker->numberBetween(1, 3), // Genera un kit_id aleatorio entre 1 y 3
        ];
    }
}


