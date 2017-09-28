<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Input;
use Excel;


class ExcelController extends Controller
{
    //
    
    static public function readExcel($file,$model_name){
       Excel::load(Input::file($file),function($reader){
           $reader->each(function($sheet){
               $model_name::firstOrCreate($sheet->toArray());
           });
       }); 
    }
    
    static public function exportExcel(){
        
    }
}
