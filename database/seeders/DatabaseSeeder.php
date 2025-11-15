<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
       // Comment::factory(3)->create();
        

        Category::factory(5)->create();
        
        Package::factory(25)->create();
       
        Hotel::factory(20)
        ->has( Room::factory()->count(3))
        ->create();
        // Room::factory(60)->create();
        
    }
}
