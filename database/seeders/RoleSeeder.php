<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create(new Sequence([
            ['id' => 1, 'name' => 'admin', 'id_user_type' => 1],
            ['id' => 2, 'name' => 'diseñador', 'id_user_type' => 1],
            ['id' => 3, 'name' => 'coordinador', 'id_user_type' => 2],
            ['id' => 4, 'name' => 'vendedor', 'id_user_type' => 3]
        ]));
    }
}
