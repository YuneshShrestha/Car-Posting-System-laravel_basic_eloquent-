<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /** 
    */
    // protected $model = \App\Models\Car::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'founded' => $this->faker->year(),
            'description' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
