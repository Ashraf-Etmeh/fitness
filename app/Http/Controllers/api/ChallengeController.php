<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    use ApiResponseTrait;
    public function index() {
        $challenges = Challenge::all();
        return $this->apiResponse($challenges,200,'ok');
    }
    public function show($id) {
        $challenge = Challenge::find($id);
        if($challenge){
            return [
                'challenge' => $challenge,
                'exercises' => $challenge->exercises,
            ];
        }
            return $this->apiResponse(null,401,'not found');
    }
}
