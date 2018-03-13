<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodPressure extends Model
{
    public function LabaratoryExamination(){
    	return $this->belongsTo(LabaratoryExamination::class)
    }
}
