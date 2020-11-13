<?php

namespace Database\Factories;

use App\Models\Checkout;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory {

    protected $model = Checkout::class;

    public function definition()
    {
        return [
            'ref_user_id' => User::all()->random(1)->first()->id,
            'ref_book_id' => Book::all()->random(1)->first()->book_id,
            'checkout_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'due_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'return_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}





