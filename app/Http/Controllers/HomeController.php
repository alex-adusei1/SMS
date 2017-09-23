<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Auth::user()->user_type_id=== 1) {
            $schools = School::get();
            return view('lower.adminMgmt.dashboard', compact('schools'));
        }
    }

}
