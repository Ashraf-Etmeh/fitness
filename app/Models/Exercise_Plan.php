<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Exercise_Plan extends Pivot
{
    use HasFactory;
    protected $table="exercise_plan";
    protected $fillable = ['exercise_id','plan_id'];

}
