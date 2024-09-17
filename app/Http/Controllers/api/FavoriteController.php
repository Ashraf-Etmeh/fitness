<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;



class FavoriteController extends Controller
{
    public function store(Request $request) {
        $user = Auth::guard('api')->user();

        // $user=auth->user()
        Favorite::create([
            'user_id' => $user->user_id,
            'exercise_id' => $request->exercise_id,
        ]);
        return response('added to favorite successfully.');
    }
    public function show(Request $request){
        $user = Auth::guard('api')->user();

        return Favorite::get()->where('user_id',$user->user_id);
    }
    public function destroy($id) {
        $favorite = Favorite::find($id);
        if ($favorite) {
            $favorite->delete();
            return response('deleted');
        }
        return \response('not existing');
    }
    public function destroyAll($user_id) {
        $favorites = Favorite::get()->where('user_id',$user_id);
        // return $favorites;
        if($favorites) {
            $favorites->map->delete();
            return response('deleted all');
        }
        return \response('not existing any');
    }
}
