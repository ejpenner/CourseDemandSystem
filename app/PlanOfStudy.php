<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanOfStudy extends Model
{
    public function student() {
        return $this->belongsTo('student');
    }

    public function enrollments(){
        return $this->hasMany('enrollment');
    }

    public function program() {
        return $this->belongsTo('program');
    }
}
