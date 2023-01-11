<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdditionBookInfo>
 */
class AdditionBookInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "page"=>$this->faker->numberBetween(500,1000),
            "weight"=>$this->faker->numberBetween(100,1000),
            "language"=>$this->faker->languageCode(),
            "book_id"=>Book::factory(),
        ];
    }
}
