<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable = [
        'name','capacity','floor','location',
    ];
    
    public function teacher(){
        return $this->hasOne('App\Teacher');
    }
    
    public function classroomSubject(){
        return $this->hasMany('App\ClassroomSubject');
    }
}
