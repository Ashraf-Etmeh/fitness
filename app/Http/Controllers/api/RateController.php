<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Rate;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function store(Request $request) {
        $user = Auth::guard('api')->user();
        $validator = Validator::make($request->all(), [
            'plan_id' => 'required',
            'stars' => 'min:0|max:5',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        Rate::create([
            "user_id" => $user->id,
            "plan_id" => $request->plan_id,
            "stars" => $request->stars,
        ]);
        return response("rated successfully :) ");
    }
    public function update(Request $request) {
        $user = Auth::guard('api')->user();
        $validator = Validator::make($request->all(), [
            'plan_id' => 'required',
            'stars' => 'min:0|max:5',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        Rate::where('user_id',$user->id)->where('plan_id',$request->plan_id)->update(['stars' => $request->stars]);

        return response("update rating successfully :) ");
    }
}
