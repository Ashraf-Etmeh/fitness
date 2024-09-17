<?php

namespace Database\Seeders;

use App\Models\RecordPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecordPlan::create([
            "user_id"=> 1,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 2,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 2,
            "plan_id"=> 2,
        ]);
        RecordPlan::create([
            "user_id"=> 3,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 3,
            "plan_id"=> 2,
        ]);
        RecordPlan::create([
            "user_id"=> 3,
            "plan_id"=> 3,
        ]);
        RecordPlan::create([
            "user_id"=> 4,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 4,
            "plan_id"=> 2,
        ]);
        RecordPlan::create([
            "user_id"=> 4,
            "plan_id"=> 3,
        ]);
        RecordPlan::create([
            "user_id"=> 4,
            "plan_id"=> 4,
        ]);
        RecordPlan::create([
            "user_id"=> 5,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 5,
            "plan_id"=> 2,
        ]);
        RecordPlan::create([
            "user_id"=> 5,
            "plan_id"=> 3,
        ]);
        RecordPlan::create([
            "user_id"=> 5,
            "plan_id"=> 4,
        ]);
        RecordPlan::create([
            "user_id"=> 5,
            "plan_id"=> 5,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 1,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 2,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 3,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 4,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 5,
        ]);
        RecordPlan::create([
            "user_id"=> 6,
            "plan_id"=> 6,
        ]);
    }
}
