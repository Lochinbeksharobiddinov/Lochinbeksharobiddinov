<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
    public function definition(): array
    {
        return [
           'model' => fake()->text(),
           'title' => fake()->title( [
            'Tayota','Honda','Ford','Chevrolet',
           ]),
           'price' => fake()->randomNumber( 10000 ,50000),
           'description' => fake()->text(50)
        ];
    }
}



