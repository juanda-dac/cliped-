<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Process::factory()->count(1)->create([
            'name' => 'Process',
            'url' => '/process-1',
            'icon' => '',
            'order' => 1,
            'hidden' => 0,
            'state' => 1,
        ]);
    }
}
