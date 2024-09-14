<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $guarded=[];


    function students() {
        return $this->belongsToMany(Students::class)->withDefault();
    }
    function classes() {
        return $this->belongsToMany(Classes::class)->withDefault();
    }
    function teachers()  {
        return $this->hasMany(Teachers::class);
    }
    function grade()  {
        return $this->hasOne(Grades::class);
    }
    function schedules() {
        return $this->hasMany(Schedules::class);
    }
}
