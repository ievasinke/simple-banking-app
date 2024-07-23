<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender' => '44AA83821167',
            'receiver' => '44AA39049412',
            'amount' => $this->faker->numberBetween(50, 1000),
            'currency_code' => 'USD'
        ];
    }
}
