<?php

namespace Database\Factories;

use App\Models\TipoEmpleados;
use App\Models\Turnos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class usuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'turno'=>$this->faker->name,
            'id_turno' => Turnos::inRandomOrder()->first(),
            't_empleado'=>$this->faker->name(),
            //'id_tipo_empleados' => TipoEmpleados::inRandomOrder()->first(),
        ];
    }
}
