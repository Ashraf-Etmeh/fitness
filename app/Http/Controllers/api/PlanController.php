<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Diet;

class PlanController extends Controller
{
    use ApiResponseTrait;
    public function index(){
        $plans = Plan::all();
        return $this->apiResponse($plans,200,'ok');
    }
    public function show_diet($diet_id) {
        $diet = Diet::find($diet_id);
        return $diet;
    }
    public function show($id){
        $plan = Plan::find($id);
        if($plan){
            return [
                'plan' => $plan,
                'diet'=> $this->show_diet($plan->diet_id),
                'exercises' => $plan->exercises,
            ];
        }
            return $this->apiResponse(null,401,'not found');
    }}
