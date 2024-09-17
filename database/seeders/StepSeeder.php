<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 2,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 1,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 3,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 4,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 5,
        ]);
        
    }
}
