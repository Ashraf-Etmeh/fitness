<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\RecordChallenge;
use App\Models\RecordPlan;
use App\Models\RecordExercise;
use Illuminate\Http\Request;
use App\Models\User;

class RecordController extends Controller
{
    public function challengeRecord($id) {
        $user = User::find($id);
        $challenges = $user->challenges;
        return [
            "user"=> $user,
            "challenges that he had finished"=> $challenges
        ];
    }
    public function planRecord($id) {
        $user = User::find($id);
        $plans = $user->plans;
        return [
            "user"=> $user,
            "plans"=> $plans
        ];
    }
    public function exerciseRecord($id) {
        $user = User::find($id);
        $exercises = $user->exercises;
        return [
            "user"=> $user,
            "exercises"=> $exercises
        ];
    }
    public function recordChallenge($user_id,$challenge_id) {
       $record = RecordChallenge::create([
        "user_id"=> $user_id,
        "challenge_id"=> $challenge_id,
       ]);
       return $record;
    }
    public function recordPlan($user_id,$plan_id) {
        $record = RecordPlan::create([
            "user_id"=> $user_id,
            "plan_id"=> $plan_id,
        ]);
        return $record;
    }
    public function recordExercise($user_id,$exercise_id) {
        $record = RecordExercise::create([
            "user_id"=> $user_id,
            "exercise_id"=> $exercise_id,
        ]);
        return $record;
    }

}
