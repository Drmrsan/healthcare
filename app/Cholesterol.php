<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cholesterol extends Model
{
    public function LabaratoryExamination(){
    	return $this->belongsTo(LabaratoryExamination::class)
    }
}
