<?php

namespace Database\Factories;

use App\Models\Lending;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lending>
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::all()->random()->id,
            'copy_id' => \App\Models\Copy::all()->random()->id,
            'start' => $this->faker->date(),
        ];
    }
}
