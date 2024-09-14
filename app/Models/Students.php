<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $guarded=[];



    function class() {
        return $this->belongsTo(Classes::class)->withDefault();
    }
    function subjects() {
        return $this->belongsToMany(Subjects::class)->withDefault();
    }
    function grades() {
        return $this->hasMany(Grades::class);
    }
    function absence() {
        return $this->hasMany(Absence::class);
    }
    function parent() {
        return $this->belongsTo(Parents::class)->withDefault();
    }
}
