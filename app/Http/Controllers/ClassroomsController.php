<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classroom;


class ClassroomsController extends Controller
{


    public function __constructor() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Classroom";
        $classRoomObjects = Classroom::all();
        $classRoomObjects_pag = Classroom::orderBy('id', 'asc')->paginate(3);//paginate
        return view('classroom.create',['title'=> $title,'classRoomObjects_pag'=>$classRoomObjects_pag])->with('classRoomObjects',$classRoomObjects);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating input field 
        $this->validate($request, [
            'class_name'=>'required',
            'class_capacity'=>'required',
            'class_floor'=>'required',
            'class_location'=>'required',
       ]);
       
           //check for dupicates
           $classNameExist = Classroom::where('name', '=', $request->input('class_name'))->get();

           //laravel eloquent output data from db using collections
           //so this verify if the collections contain data or using isEmpty()

           if(!$classNameExist->isEmpty())
           {
              return redirect('/classroom')->with('error','Classroom Already Exist');
           }
           else{
               //create post
         $add_class_field = new Classroom;
         $add_class_field->name =$request->input('class_name');
         $add_class_field->capacity = $request->input('class_capacity');
         $add_class_field->floor = $request->input('class_floor');
        $add_class_field->location = $request->input('class_location');
        $add_class_field->save();
     
        //redirect
        return redirect('/classroom')->with('success','Classroom Created');
           }
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $classRoomObjects = Classroom::find($id);
         return view('classroom.edit')->with('classobj',$classRoomObjects);
        
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validating input field 
         $this->validate($request, [
             'class_name'=>'required',
             'class_capacity'=>'required',
             'class_floor'=>'required',
             'class_location'=>'required',
    ]);
       
           //check for dupicates
           $classNameExist = Classroom::where('name', '=', $request->input('class_name'))->get();
           
        //laravel eloquent output data from db using collections
        //so this verify if the collections contain data or using isEmpty()

        if(!$classNameExist->isEmpty())
        {
            return redirect('/classroom')->with('error','Classroom Already Exist');
        }
        else{
       
        //create post
            $update_class_field = Classroom::find($id);

            $update_class_field->name =$request->input('class_name');
            $update_class_field->capacity = $request->input('class_capacity');
            $update_class_field->floor = $request->input('class_floor');
            $update_class_field->location = $request->input('class_location');
            $update_class_field->save();
        
        //redirect
            return redirect('/classroom')->with('success','Classroom updated');
        
       }
       
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $classRoomObjects = Classroom::find($id);
         $classRoomObjects->delete();
         //redirect
       return redirect('/classroom')->with('success','Classroom deleted');
    }

    //load class
    public function loadclass(){
        return 'hi';
    }
}
