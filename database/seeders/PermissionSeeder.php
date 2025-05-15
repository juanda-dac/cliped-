<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::factory()->create(new Sequence([
            [
                'id_action' => 1,
                'id_role' => 1,
                'id_process' => 1
            ],
            [
                'id_action' => 2,
                'id_role' => 1,
                'id_process' => 1
            ],
            [
                'id_action' => 3,
                'id_role' => 1,
                'id_process' => 1
            ],
            [
                'id_action' => 4,
                'id_role' => 1,
                'id_process' => 1
            ],
            [
                'id_action' => 5,
                'id_role' => 1,
                'id_process' => 1
            ],
            [
                'id_action' => 1,
                'id_role' => 2,
                'id_process' => 1
            ],
            [
                'id_action' => 2,
                'id_role' => 2,
                'id_process' => 1
            ],
            [
                'id_action' => 3,
                'id_role' => 2,
                'id_process' => 1
            ],
            [
                'id_action' => 1,
                'id_role' => 3,
                'id_process' => 1
            ],
            [
                'id_action' => 2,
                'id_role' => 3,
                'id_process' => 1
            ],
            [
                'id_action' => 4,
                'id_role' => 3,
                'id_process' => 1
            ],
            [
                'id_action' => 2,
                'id_role' => 4,
                'id_process' => 1
            ],
            [
                'id_action' => 3,
                'id_role' => 4,
                'id_process' => 1
            ],
        ]));
    }
}
