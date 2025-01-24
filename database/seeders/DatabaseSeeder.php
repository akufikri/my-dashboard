<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin1234#12'),
            'phone_number' => '6281234554321',
            'image' => null,
            'status' => 1,
            'created_at' => now(),
        ]);

        $address_data = [
            'address_line_1' => 'Jawabarat',
            'address_line_2' => 'Kota cirebon'
        ];

        Address::create([
            'user_id' => $user->id,
            'address' => json_encode($address_data),
            'created_at' => now()
        ]);
    }
}
