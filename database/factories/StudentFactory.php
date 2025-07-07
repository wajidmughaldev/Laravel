<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->date(),
            'address' => $this->faker->address(),
            'city' => $this->faker->numberBetween(1,5), 
            'state' => $this->faker->state(), 
            'zip_code' => $this->faker->postcode(), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
