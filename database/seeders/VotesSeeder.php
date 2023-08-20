<?php

namespace Database\Seeders;

use App\Models\Vote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vote::create([
            'user_id' => 5002231074,
            'candidate_id' => 5002231076,
            'created_at' => 1679542172,
        ]);

        Vote::create([
            'user_id' => 5002231075,
            'candidate_id' => 5002231077,
            'created_at' => 1679542305,
        ]);

        Vote::create([
            'user_id' => 5002231076,
            'candidate_id' => 5002231083,
            'created_at' => 1679542400,
        ]);

        Vote::create([
            'user_id' => 5002231077,
            'candidate_id' => 5002231080,
            'created_at' => 1679542508,
        ]);

        Vote::create([
            'user_id' => 5002231078,
            'candidate_id' => 5002231081,
            'created_at' => 1679542600,
        ]);

        Vote::create([
            'user_id' => 5002231079,
            'candidate_id' => 5002231075,
            'created_at' => 1679542700,
        ]);

        Vote::create([
            'user_id' => 5002231080,
            'candidate_id' => 5002231083,
            'created_at' => 1679542800,
        ]);

        Vote::create([
            'user_id' => 5002231081,
            'candidate_id' => 5002231074,
            'created_at' => 1679542900,
        ]);

        Vote::create([
            'user_id' => 5002231082,
            'candidate_id' => 5002231076,
            'created_at' => 1679543000,
        ]);

        Vote::create([
            'user_id' => 5002231083,
            'candidate_id' => 5002231077,
            'created_at' => 1679543100,
        ]);
    }
}
