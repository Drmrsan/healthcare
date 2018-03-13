<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabaratoryExamination extends Model
{
    public function BloodPressures(){
    	return $this->hasMany(BloodPressure::class)
    }

    public function BloodSugarLevels(){
    	return $this->hasMany(BloodSugarLevel::class)
    }

    public function Cholesterols(){
    	return $this->hasMany(Cholesterol::class)
    }
}
