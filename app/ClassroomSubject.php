<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSubject extends Model
{
    //
    protected $fillable = [
        'classroom_id','subject'
    ];
    
    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
