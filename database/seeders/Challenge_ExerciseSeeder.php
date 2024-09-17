<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Challenge_Exercise;

class Challenge_ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Challenge_Exercise::create([
            "challenge_id"=> 1,
            "exercise_id"=> 2,
        ]);
        Challenge_Exercise::create([
            "challenge_id"=> 1,
            "exercise_id"=> 1,
        ]);
        Challenge_Exercise::create([
            "challenge_id"=> 1,
            "exercise_id"=> 3,
        ]);
        Challenge_Exercise::create([
            "challenge_id"=> 2,
            "exercise_id"=> 4,
        ]);
        Challenge_Exercise::create([
            "challenge_id"=> 2,
            "exercise_id"=> 5,
        ]);

     }
}
