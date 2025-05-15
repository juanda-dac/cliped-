<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Process>
 */
class ProcessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_top' => null,
            'name'=>fake()->name(),
            'description' => fake()->sentence(),
            'url'=>fake()->url(),
            'icon' => Str::toBase64('test'),
            'order'=> fake()->randomDigit(),
            'hidden' => fake()->randomElement(['0', '1']),
            'state'=>fake()->randomElement([1, 0]),
        ];
    }
}
