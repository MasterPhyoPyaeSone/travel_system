<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'intro'=>fake()->paragraph,
            'body'=>fake()->paragraph,
            'price'=>3000,
            'hotel_id'=>Hotel::factory(),
            'room_type'=>'1',
            'img_1'=>fake()->imageUrl(),
            'img_2'=>fake()->imageUrl(),
            'img_3'=>fake()->imageUrl(),
            'img_4'=>fake()->imageUrl(),
            'img_5'=>fake()->imageUrl(),
        ];
    }
}
