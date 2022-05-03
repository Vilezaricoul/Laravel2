<?php

namespace Database\Factories;


use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),

            'intercom_code' => $this->faker->numerify('B###B##'),
            
            'product_id' => Product::all()->random()->id
        ];
    }
}
