<?php

namespace Database\Seeders;

use App\Models\ObjectiveExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectiveExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ObjectiveExercise::truncate();
        ObjectiveExercise::create([
            "name"=> "stomach muscles exercises",
            "name_arabic"=> "تمارين عضلات البطن",
            "path"=> "images/objPhotos/stomch muscles .jpg",
        ]);
        ObjectiveExercise::create([
            "name"=> "Chest exercises",
            "name_arabic"=> "تمارين الصدر",
            "path"=> "images/objPhotos/chest .jpg",
        ]);
        ObjectiveExercise::create([
            "name"=> "Leg exercises",
            "name_arabic"=> "تمارين الساقين",
            "path"=> "images/objPhotos/leg.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Arm exercises",
            "name_arabic"=> "تمارين الذراع",
            "path"=> "images/objPhotos/Arm.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Back and shoulder exercises",
            "name_arabic"=> "تمارين الظهر و الكتفان",
            "path"=> "images/objPhotos/Back and shoulder.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Biceps exercises",
            "name_arabic"=> "تمارين العضلة ذات الرئيسين",
            "path"=> "images/objPhotos/Biceps.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Triceps exercises",
            "name_arabic"=> "تمارين العضلة ثلاثية الرؤوس",
            "path"=> "images/objPhotos/Triceps.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Running exercises",
            "name_arabic"=> "تمارين الجري و اللياقة البدنية",
            "path"=> "images/objPhotos/Running.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Forearm exercises",
            "name_arabic"=> "تمارين الساعد",
            "path"=> "public/images/Forearm.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "Push-ups",
            "name_arabic"=> "تمارين  الضغط",
            "path"=> "images/objPhotos/push-ups"
        ]);
        ObjectiveExercise::create([
            "name"=> "Plank exercises",
            "name_arabic"=> "تمارين البلانك",
            "path"=> "images/objPhotos/plank.jpg"
        ]);
        ObjectiveExercise::create([
            "name"=> "weight exercises",
            "name_arabic"=> "تمارين الأوزان",
            "path"=> "images/objPhotos/weight.jpg"
        ]);
    }
}
