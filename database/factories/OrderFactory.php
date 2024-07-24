<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'totalPrice'=>$this ->faker->randomFloat(2,100,10000),
            'user_id'=> User::pluck('user_id')->random(),
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime,  
        ];
    }
}
