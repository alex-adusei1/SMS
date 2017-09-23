<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\Teacher_File;
use App\Classroom;
use League\Csv\Reader;

class TeacherController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        if (SchoolController::readSession($request) === "lower") {
            $teacher = User::where('user_type_id', 2)->orderBy('id', 'desc')->get();
//            return $teacher;
            return view('lower.adminMgmt.teacher.dashboard', compact('teacher'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $school_id = 0;

        if (SchoolController::readSession($request) === "lower") {
            $school_id = 1;
        } elseif (SchoolController::readSession($request) === "upper") {
            $school_id = 2;
        } elseif (SchoolController::readSession($request) === "junior") {
            $school_id = 3;
        } elseif (SchoolController::readSession($request) === "senior") {
            $school_id = 4;
        } elseif (SchoolController::readSession($request) === "tertiary") {
            $school_id = 5;
        } else {
            // that is the least product you can use
            $school_id = 1;
        }
        $user = User::create([
                    'user_type_id' => $request->user_id + 1,
                    'first_name' => ucwords($request->first_name),
                    'last_name' => ucwords($request->last_name),
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'phone' => $request->phone,
                    'mobile' => $request->mobile,
                    'gender' => $request->gender,
                    'dob' => $request->dob,
                    'country' => ucwords($request->country),
                    'postal_address' => ucwords($request->postal_address),
                    'residential_address' => ucwords($request->residential_address),
                    'location' => ucwords($request->location),
                    'place_of_birth' => ucwords($request->place_of_birth),
                    'tribe' => ucwords($request->tribe)
        ]);

        $teacher = Teacher::create([
                    'user_id' => $user->id,
                    'current_edu_level' => ucwords($request->current_edu_level),
                    'course' => ucwords($request->course),
                    'school_id' => $school_id,
                    'year_completed' => $request->year_completed,
                    'classroom_id' => $request->classroom_id,
                    'date_employed' => $request->date_employed,
                    'experiences' => $request->experiences,
        ]);

        $this->fileUpload($request->cv, $teacher->id);
        if ($school_id === 1){
            return redirect('/teacher')->withErrors("Teacher " . $request->first_name . " " . $request->last_name . " was created");
        } else {
            return redirect('/');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $teacher = User::findOrFail($id)->where('id', $id)->first();
        $teacher_classroom = Classroom::where('id', $teacher->teacher->classroom_id)->first();
        return view('admin.teacher.detail', compact('teacher', 'teacher_classroom'));
    }

    /*     * ass
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download() {
        return "something to download";
    }

    public function importcsv() {
        return "somethin here";
    }

    public function exportcsv() {
        return "we are exporting csv";
    }

    protected function fileUpload($file, $teacher_id) {

        if (!empty($file)) {

            $name = time() . $file->getClientOriginalName();

            $file->move('files', $name);

            Teacher_File::create([
                'teacher_id' => $teacher_id,
                'path' => $name
            ]);
        }
    }

}
