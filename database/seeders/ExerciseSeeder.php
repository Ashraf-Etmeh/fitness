<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::create([
            "name"=> "push-up",
            "name_arabic"=> "ضغط",
            "path"=> "images/تمرين-الرفع-Push-up-جزء-من-تمارين-الهيت.gif",
        ]);
        Exercise::create([
            "name"=> "side stomach",
            "name_arabic"=> "المعدة الجانبية",
            "path"=> "images/ElderlySpiritedKawala-size_restricted (1).gif"
        ]);
        Exercise::create([
            "name"=> "bottom stomach",
            "name_arabic"=> "المعدة السفلى",
            "path"=> "images/5736-5.gif"
        ]);
        Exercise::create([
            "name"=> "top stomach",
            "name_arabic"=> "المعدة العليا",
            "path"=> "images/Pp.gif"
        ]);
        Exercise::create([
            "name"=> "Heavy Weight",
            "name_arabic"=> "الاوزان الثقيلة",
            "path"=> "images/main-qimg-534fffbf9f487c08ac497addf714f662.gif"
        ]);
        Exercise::create([
            "name"=> "Light Weight",
            "name_arabic"=> "الاوزان الخفيفة",
            "path" => "images/Hammer Curls.gif"
        ]);
        Exercise::create([
            "name"=> "main plank",
            "name_arabic"=> "البلانك الاساسي",
            "path" => "images/1283.gif"
        ]);
        Exercise::create([
            "name"=> "side plank",
            "name_arabic"=> "البلانك الجانبي",
            "path" => "images/Side Balnk.gif"
        ]);
        Exercise::create([
            "name"=> "long running",
            "name_arabic"=> "الجري الطويل",
            "path" => "images/unnamed.gif"
        ]);
        Exercise::create([
            "name"=> "Consecutive running",
            "name_arabic"=> "الجري المتتالي",
            "path" => "images/dkdsjnnhepo15.gif"
        ]);

    }
}
