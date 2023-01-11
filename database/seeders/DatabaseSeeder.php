<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdditionBookInfo;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Database\Seeders\PublisherSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // $this->call(PublisherSeeder::class);
        Publisher::factory()
        ->count(100)
        ->create();
        Book::factory()
        ->has(AdditionBookInfo::factory()->count(1))
        ->count(1000)
        ->create();



    }
}
