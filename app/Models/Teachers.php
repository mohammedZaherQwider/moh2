<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $guarded=[];

    function subject()
    {
        return $this->belongsTo(Subjects::class)->withDefault();
    }
    function classes()
    {
        return $this->belongsToMany(Classes::class)->withDefault();
    }
    function grades()
    {
        return $this->hasMany(Grades::class);
    }
    function schedules()
    {
        return $this->hasMany(Schedules::class);
    }
}
