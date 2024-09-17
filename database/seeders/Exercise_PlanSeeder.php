<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exercise_Plan;

class Exercise_PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise_Plan::create([
            "plan_id"=> 1,
            "exercise_id"=> 2,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 1,
            "exercise_id"=> 1,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 1,
            "exercise_id"=> 3,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 2,
            "exercise_id"=> 4,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 2,
            "exercise_id"=> 5,
        ]);

        Exercise_Plan::create([
            "plan_id"=> 4,
            "exercise_id"=> 1,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 4,
            "exercise_id"=> 1,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 4,
            "exercise_id"=> 2,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 5,
            "exercise_id"=> 3,
        ]);
        Exercise_Plan::create([
            "plan_id"=> 5,
            "exercise_id"=> 4,
        ]);
    }
}
