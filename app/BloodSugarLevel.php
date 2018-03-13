<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodSugarLevel extends Model
{
    public function LabaratoryExamination(){
    	return $this->belongsTo(LabaratoryExamination::class)
    }
}
