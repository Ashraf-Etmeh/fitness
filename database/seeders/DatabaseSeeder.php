<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ChallengeSeeder::class,
            DietSeeder::class,
            ExerciseSeeder::class,
            MealSeeder::class,
            ObjectiveExerciseSeeder::class,
            PlanSeeder::class,
            Challenge_ExerciseSeeder::class,
            Diet_MealSeeder::class,
            Exercise_PlanSeeder::class,
            StepSeeder::class,
            RecordExerciseSeeder::class,
            RecordChallengeSeeder::class,
            RecordPlanSeeder::class,
        ]);
    }
}
