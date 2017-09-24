<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
      'user_id','classroom_id','date_employed','current_edu_level','year_completed','experiences','course','school_id' 
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
