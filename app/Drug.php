<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    //retrieve which diagnose belongs to
    public function diagnose()
    {
      return $this->belongsToMany('App\Diagnose')->withPivot('dose', 'deleted')->withTimestamps();
    }
    //get the patient#
    public function patient()
    {
        return $this->diagnose->patient;
    }
}
