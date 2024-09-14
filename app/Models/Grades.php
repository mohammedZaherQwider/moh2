<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $guarded=[];


    function student() {
        return $this->belongsTo(Students::class);
    }
    function subject()  {
        return $this->belongsTo(Subjects::class);
    }
    function teacher()  {
        return $this->belongsTo(Teachers::class);
    }

}
