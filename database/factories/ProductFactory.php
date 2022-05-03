<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'is_blocked' => $this->faker->boolean(80),
            'code' => $this->faker->numerify('B###B##'),
            'description' =>$this->faker->word(),
            'price' =>$this->faker->buildingNumber(),
            'quantity'=>$this->faker->buildingNumber(),
        ];
    }
}
