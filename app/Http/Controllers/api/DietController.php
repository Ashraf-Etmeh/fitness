<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    use ApiResponseTrait;
    public function index() {
        $diets = Diet::all();
        return $this->apiResponse($diets,200,"ok");
    }
    public function show($id) {
        $diet = Diet::find($id);
        if($diet){
            return [
                'diet' => $diet,
                'plans' => $diet->plans,
            ];
        }
            return $this->apiResponse(null,401,'not found');
    }
}
