<?php

namespace Database\Seeders;

use App\Models\RecordExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecordExercise::create([
            "user_id"=> 1,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 2,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 2,
            "exercise_id"=> 2,
        ]);
        RecordExercise::create([
            "user_id"=> 3,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 3,
            "exercise_id"=> 2,
        ]);
        RecordExercise::create([
            "user_id"=> 3,
            "exercise_id"=> 3,
        ]);
        RecordExercise::create([
            "user_id"=> 4,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 4,
            "exercise_id"=> 2,
        ]);
        RecordExercise::create([
            "user_id"=> 4,
            "exercise_id"=> 3,
        ]);
        RecordExercise::create([
            "user_id"=> 4,
            "exercise_id"=> 4,
        ]);
        RecordExercise::create([
            "user_id"=> 5,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 5,
            "exercise_id"=> 2,
        ]);
        RecordExercise::create([
            "user_id"=> 5,
            "exercise_id"=> 3,
        ]);
        RecordExercise::create([
            "user_id"=> 5,
            "exercise_id"=> 4,
        ]);
        RecordExercise::create([
            "user_id"=> 5,
            "exercise_id"=> 5,
        ]);
        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 1,
        ]);
        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 2,
        ]);
        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 3,
        ]);

        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 4,
        ]);
        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 5,
        ]);
        RecordExercise::create([
            "user_id"=> 6,
            "exercise_id"=> 6,
        ]);
        RecordExercise::create([
            "user_id"=> 7,
            "exercise_id"=> 1,
        ]);
    }
}
