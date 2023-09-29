<?php

namespace Modules\Book\Database\seeder;

use Illuminate\Database\Seeder;
use Modules\Book\Model\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory(10)->create();
    }
}
