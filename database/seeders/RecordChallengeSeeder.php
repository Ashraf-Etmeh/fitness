<?php

namespace Database\Seeders;

use App\Models\RecordChallenge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecordChallenge::create([
            "user_id"=> 1,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 2,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 2,
            "challenge_id"=> 2,
        ]);
        RecordChallenge::create([
            "user_id"=> 3,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 3,
            "challenge_id"=> 2,
        ]);
        RecordChallenge::create([
            "user_id"=> 3,
            "challenge_id"=> 3,
        ]);
        RecordChallenge::create([
            "user_id"=> 4,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 4,
            "challenge_id"=> 2,
        ]);
        RecordChallenge::create([
            "user_id"=> 4,
            "challenge_id"=> 3,
        ]);
        RecordChallenge::create([
            "user_id"=> 4,
            "challenge_id"=> 4,
        ]);
        RecordChallenge::create([
            "user_id"=> 5,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 5,
            "challenge_id"=> 2,
        ]);
        RecordChallenge::create([
            "user_id"=> 5,
            "challenge_id"=> 3,
        ]);
        RecordChallenge::create([
            "user_id"=> 5,
            "challenge_id"=> 4,
        ]);
        RecordChallenge::create([
            "user_id"=> 5,
            "challenge_id"=> 5,
        ]);
        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 1,
        ]);
        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 2,
        ]);
        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 3,
        ]);

        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 4,
        ]);
        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 5,
        ]);
        RecordChallenge::create([
            "user_id"=> 6,
            "challenge_id"=> 6,
        ]);
        RecordChallenge::create([
            "user_id"=> 7,
            "challenge_id"=> 1,
        ]);
    }
}
