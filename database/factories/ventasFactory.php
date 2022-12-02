<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ventasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alias_titular'=>$this->faker->name(),
            'descripcion'=>$this->faker->text(10),
            'total'=>$this->faker->numberBetween(100,1000)
        ];
    }
}
