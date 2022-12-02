<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\turno>
 */
class turnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'nombre'=>$this->fake->name(),
            'entrada'=>$this->faker->time(),
            'salida'=>$this->faker->time()
        ];
    }
}
