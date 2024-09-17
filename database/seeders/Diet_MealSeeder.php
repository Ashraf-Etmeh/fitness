<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diet_Meal;

class Diet_MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diet_Meal::create([
            "diet_id"=> 1,
            "meal_id"=> 2,
        ]);
        Diet_Meal::create([
            "diet_id"=> 1,
            "meal_id"=> 1,
        ]);
        Diet_Meal::create([
            "diet_id"=> 2,
            "meal_id"=> 1,
        ]);
        Diet_Meal::create([
            "diet_id"=> 3,
            "meal_id"=> 1,
        ]);
        Diet_Meal::create([
            "diet_id"=> 1,
            "meal_id"=> 3,
        ]);
        Diet_Meal::create([
            "diet_id"=> 2,
            "meal_id"=> 4,
        ]);
        Diet_Meal::create([
            "diet_id"=> 2,
            "meal_id"=> 5,
        ]);
        Diet_Meal::create([
            "diet_id"=> 2,
            "meal_id"=> 6,
        ]);
        Diet_Meal::create([
            "diet_id"=> 3,
            "meal_id"=> 7,
        ]);
        Diet_Meal::create([
            "diet_id"=> 3,
            "meal_id"=> 8,
        ]);
        Diet_Meal::create([
            "diet_id"=> 3,
            "meal_id"=> 9,
        ]);
        Diet_Meal::create([
            "diet_id"=> 4,
            "meal_id"=> 10,
        ]);
        Diet_Meal::create([
            "diet_id"=> 4,
            "meal_id"=> 11,
        ]);
        Diet_Meal::create([
            "diet_id"=> 4,
            "meal_id"=> 12,
        ]);
        Diet_Meal::create([
            "diet_id"=> 5,
            "meal_id"=> 13,
        ]);
        Diet_Meal::create([
            "diet_id"=> 5,
            "meal_id"=> 14,
        ]);
        Diet_Meal::create([
            "diet_id"=> 5,
            "meal_id"=> 6,
        ]);
    }
}
