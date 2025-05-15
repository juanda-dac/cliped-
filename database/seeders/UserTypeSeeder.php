<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::factory()->count(3)->create(new Sequence([
            [
                'id' => 1,
                'name' => 'empleado'
            ],
            [
                'id' => 2,
                'name' => 'cliente'
            ],
            [
                'id' => 3,
                'name' => 'proveedor'
            ]
        ]));
    }
}
