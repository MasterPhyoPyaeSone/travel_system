<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(),
            'package_id'=>Package::factory()->create(),
            'price'=>3000,
            'intro'=>fake()->sentence(),
            'body'=>fake()->sentence(),
            'place'=>'London',
            'img_1'=>fake()->imageUrl(),
            'img_2'=>fake()->imageUrl(),
            'img_3'=>fake()->imageUrl(),
            'img_4'=>fake()->imageUrl(),
            'img_5'=>fake()->imageUrl(),
            'img_6'=>fake()->imageUrl(),
            'img_7'=>fake()->imageUrl(),
            'img_8'=>fake()->imageUrl(),
            'img_9'=>fake()->imageUrl(),
            'img_10'=>fake()->imageUrl(),


        ];
    }
}
