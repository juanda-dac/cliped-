<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Action::factory()->create(new Sequence([
            ['id' => 1, 'name' => 'create', 'letter' => 'W'],
            ['id' => 2, 'name' => 'read', 'letter' => 'R'],
            ['id' => 3, 'name' => 'update', 'letter' => 'U'],
            ['id' => 4, 'name' => 'delete', 'letter' => 'D'],
            ['id' => 5, 'name' => 'execute', 'letter' => 'E'],
        ]));
        
    }
}
