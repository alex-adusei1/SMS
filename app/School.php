<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable  = [
        'name','age_range'
    ];
    
    public function schoolSubject(){
        return $this->hasMany('App\SchoolSubject');
    }
}
