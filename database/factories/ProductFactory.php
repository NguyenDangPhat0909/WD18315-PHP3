<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this ->faker->word,
            'price'=>$this ->faker->randomFloat(2,100,10000),
            'description'=>$this->faker->text,
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime
        ];
    }
}