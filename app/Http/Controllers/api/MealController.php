<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    use ApiResponseTrait;
    public function index() {
        $meals = Meal::all();
        return $this->apiResponse($meals,200,"ok");
    }
    public function show($id) {
        $meal = Meal::find($id);
        if ($meal) {
            return [
                "meal"=> $meal,
                "belongs to many" => $meal->diets,
            ];
        }
        return $this->apiResponse([],404,"not found");
    }
}
