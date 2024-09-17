<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseResource;
use App\Http\Resources\ObjectiveExerciseResource;
use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\Step;

class ExerciseController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        $exercises = ExerciseResource::collection(Exercise::all());
        return $this->apiResponse($exercises,200,'0k');
    }

    public function show($id){
        $exercise = Exercise::find($id);
        if($exercise){
            return $exercise->objectives;
            // $objectives = ObjectiveExerciseResource::collection($exercise->objectives);
            // return $this->apiResponse($objectives,200,'ok');
        }
        return $this->apiResponse(null,401,'not found');
    }
    public function search($name){
        return Exercise::where('name', 'like', '%'.$name.'%')->orWhere('name_arabic','like','%'.$name.'%')->get();
    }

}
