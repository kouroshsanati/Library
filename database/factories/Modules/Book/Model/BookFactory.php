<?php

namespace database\factories\Modules\Book\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Book\Model\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Book\Model\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'isbn' => fake()->numerify,
            'price' => fake()->numerify('###'),
        ];
    }
}
