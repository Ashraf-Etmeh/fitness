<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ObjectiveExercise;
use App\Models\Plan;
use App\Models\Challenge;
class Exercise extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function objectives() {
        return $this->belongsToMany(ObjectiveExercise::class,'steps');
    }
    public function challenges() {
        return $this->belongsToMany(Challenge::class);
    }
    public function plans() {
        return $this->belongsToMany(Plan::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
