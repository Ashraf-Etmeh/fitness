<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diet;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['name','name_arabic'];
    public function diets(){
        return $this->belongsToMany(Diet::class);
    }
}
