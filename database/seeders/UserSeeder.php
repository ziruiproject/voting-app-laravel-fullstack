<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 5002231074,
            'name' => 'Yudha Prawira Sugiharto',
            'email' => 'yudha@example.com',
            'password' => '5002231074',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231075,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '5002231075',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231076,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => '5002231076',
            'is_candidate' => true,
        ]);

        User::create([
            'id' => 5002231077,
            'name' => 'Michael Johnson',
            'email' => 'michael@example.com',
            'password' => '5002231077',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231078,
            'name' => 'Sarah Williams',
            'email' => 'sarah@example.com',
            'password' => '5002231078',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231079,
            'name' => 'Emily Brown',
            'email' => 'emily@example.com',
            'password' => '5002231079',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231080,
            'name' => 'William Wilson',
            'email' => 'william@example.com',
            'password' => '5002231080',
            'is_candidate' => true,
        ]);

        User::create([
            'id' => 5002231081,
            'name' => 'Olivia Davis',
            'email' => 'olivia@example.com',
            'password' => '5002231081',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231082,
            'name' => 'James Martinez',
            'email' => 'james@example.com',
            'password' => '5002231082',
            'is_candidate' => false,
        ]);

        User::create([
            'id' => 5002231083,
            'name' => 'Sophia Anderson',
            'email' => 'sophia@example.com',
            'password' => '5002231083',
            'is_candidate' => true,
        ]);
    }
}
