<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'price'=>3000,
            'intro'=>fake()->sentence(),
            'body'=>fake()->sentence(),
            'long_time'=>'3 days and 4 nights',
            'place'=>'London',
            'category_id'=>1,
            'img_1'=>fake()->imageUrl(),
            'img_2'=>fake()->imageUrl(),
            'img_3'=>fake()->imageUrl(),
            'img_4'=>fake()->imageUrl(),
            'img_5'=>fake()->imageUrl(),
            
        ];
    }
}
