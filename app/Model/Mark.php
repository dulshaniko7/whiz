<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $guarded = [];

    protected $table = 'student_subject';

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
