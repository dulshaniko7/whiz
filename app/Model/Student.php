<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function subjects(){
        return $this->belongsToMany(Subject::class,'student_subject','id','id');
    }
}
