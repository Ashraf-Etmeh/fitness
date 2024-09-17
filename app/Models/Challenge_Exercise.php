<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Challenge_Exercise extends Pivot
{
    use HasFactory;
    protected $table='challenge_exercise';
    protected $fillable = ['challenge_id','exercise_id'];
}
