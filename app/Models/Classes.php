<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $guarded=[];


    function students()
    {
        return $this->hasMany(Students::class);
    }
    function teachers()  {
        return $this->belongsToMany(Teachers::class)->withDefault();
    }
    function subjects()  {
        return $this->belongsToMany(Teachers::class)->withDefault();
    }
    function schedules() {
        return $this->hasMany(Schedules::class);
    }
}
