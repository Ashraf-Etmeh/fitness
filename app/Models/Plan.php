<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exercise;
use App\Models\Diet;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name','name_arabic'];

    public function exercises(){
        return $this->belongsToMany(Exercise::class);
    }
    public function diet() {
        return $this->belongsTo(Diet::class);
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
