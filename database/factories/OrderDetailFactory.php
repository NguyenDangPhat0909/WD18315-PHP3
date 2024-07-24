<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quanlity'=>$this ->faker->randomNumber(1,100),
            'price'=>$this->faker->randomFloat(2,100,10000),
            'order_id'=>Order::pluck('order_id')->random(),
            'product_id'=>Product::pluck('product_id')->random(),
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime,
        ];
    }
}
