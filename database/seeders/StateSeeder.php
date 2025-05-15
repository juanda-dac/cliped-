<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::factory()->count(1)->create([
            'name' => 'Santander',
            'state_cod' => 'SDER',
            'id_country' => 1
        ]);
    }
}
