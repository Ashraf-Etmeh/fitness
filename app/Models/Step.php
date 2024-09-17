<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Step extends Pivot
{
    use HasFactory;
    protected $table="steps";
    protected $fillable = ['objective_exercise_id','exercise_id'];
}
