<?php

namespace Database\Factories;

use App\Models\Barangay;
use App\Models\DriverLicense;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'license_id' => DriverLicense::inRandomOrder()->first()->id,
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->lastName(),
            'last_name' => fake()->lastName(),
            'suffix' => fake()->optional()->randomElement(['Jr.', 'Sr.']),
            'barangay_id' => Barangay::inRandomOrder()->first()->id,
            'street_address' => fake()->streetAddress(),
            'gender' => fake()->randomElement(['Male', 'Female']),
        ];
    }
}
