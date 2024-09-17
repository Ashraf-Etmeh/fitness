<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Diet_Meal extends Pivot
{
    use HasFactory;
    protected $table="diet_meal";
    protected $fillable = ['diet_id','meal_id'];
}
