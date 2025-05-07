<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //        $this->call([
        //            ActorSeeder::class,
        //            MovieSeeder::class,
        //        ]);

        // Generate 15 Actor instances using the factory
        Actor::factory(15)
            ->hasAttached(
                // Attach 3 Movie instances to each Actor using a many-to-many relationship
                Movie::factory()->count(3)
            )->create();
    }
}
