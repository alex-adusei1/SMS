<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
      'user_id','teacher_file_id','classroom_id','date_employed','current_edu_level','experences'   
    ];
}
