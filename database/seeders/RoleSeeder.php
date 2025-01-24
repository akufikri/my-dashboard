<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id'         => 1,
                'name'       => 'admin',
                'guard_name' => 'web', // Tambahkan guard_name
            ],
            [
                'id'         => 2,
                'name'       => 'users',
                'guard_name' => 'web', // Tambahkan guard_name
            ]
        ];

        foreach ($data as $item) {
            Role::create([
                'id'         => $item['id'],
                'name'       => $item['name'],
                'guard_name' => $item['guard_name'], // Sertakan guard_name
            ]);
        }
    }
}
