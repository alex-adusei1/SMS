<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\Teacher_File;
use League\Csv\Reader;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $user = User::create([
          'user_type_id'=>2,
          'first_name'=>ucwords($request->first_name),
          'last_name'=>ucwords($request->last_name),
          'username'=>$request->username,
          'email'=> $request->email,
          'password'=> bcrypt($request->password),
          'phone'=>$request->phone,
          'mobile'=>$request->mobile,
          'gender'=>$request->gender,
          'dob'=>$request->dob,
          'country'=>ucwords($request->country),
          'postal_address'=>ucwords($request->postal_address),
          'residential_address'=>ucwords($request->residential_address),
          'location'=>ucwords($request->location),
          'place_of_birth'=>ucwords($request->place_of_birth),
          'tribe'=>ucwords($request->tribe)
        ]);

        $teacher = Teacher::create([
          'user_id'=>$user->id,
          'current_edu_level' =>ucwords($request->current_edu_level),
          'course'=> ucwords($request->course),
          'year_completed'=>$request->year_completed,
          'classroom_id'=>$request->classroom_id,
          'date_employed'=>$request->date_employed,
          'experiences'=>$request->experiences,
        ]);

        // Teacher file

        $this->fileUpload($request->cv,$teacher->id);

        return redirect('/teacher')->withErrors("Teacher ". $request->first_name . " ". $request->last_name ." was created");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function download(){
       return "something to download";
     }


     public function importcsv(){
      return "somethin here";
     }

     public function exportcsv(){
       return "we are exporting csv";
     }

     protected function fileUpload($file,$teacher_id) {

       if (!empty($file)) {

        $name = time() . $file->getClientOriginalName();

        $file->move('files', $name);

        Teacher_File::create([
          'teacher_id'=>$teacher_id,
          'path' => $name
        ]);
}

}

}
