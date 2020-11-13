<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory {

    protected $model = Book::class;

    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13,
            'released' => $this->faker->dateTime(),
            'title' => $this->faker->text($maxNbChars = 30), 
            'excerpt' => $this->faker->text(),
            'pages' => $this->faker->numberBetween($min = 10, $max = 500),
            'cost' => $this->faker->numberBetween($min = 10, $max = 5000),
            'value' => $this->faker->numberBetween($min = 10, $max = 5000),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}





