<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSubject extends Model
{
    //
    protected $fillable =[
      'school_id','subject'  
    ];
    
    public function school(){
        return $this->belongsTo('App\School');
    }
}
