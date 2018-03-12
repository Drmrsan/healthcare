<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = [
        'first_name', 'last_name', 'jmbg', 'social_number', 'doctor_id'
    ];

    public function doctor(){
    	return $this->belongsTo(Doctor::class);
    }
}
