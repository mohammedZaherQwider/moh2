<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $guarded=[];


    function class() {
        return $this->belongsTo(Classes::class);
    }
    function subject() {
        return $this->belongsTo(Subjects::class);
    }
    function teacher() {
        return $this->belongsTo(Teachers::class);
    }
}
