<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Colombia']),
            'iso_cod_3' => fake()->randomElement(['COL']),
            'phone_prefix' => fake()->randomElement(['57']),
            'flag' => Str::toBase64('b64'),
        ];
    }
}
