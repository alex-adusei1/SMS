<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SchoolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
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
     * 
     * @param Request $request
     * @return type
     */
    public function lowerPrimary(Request $request) {
        $this->setSession("lower");
        if ($this->readSession($request) === "lower") {
            return view('lower.adminMgmt.home');
        } else {
            return redirect('/');
        }
    }

    public function upperPrimary() {
        // pull data relating to upper primary
        if (Auth::user()->username === "admin") {
            return view('admin.home');
        }
        abort('404');
    }

    public function jhs() {
        if (Auth::user()->username === "admin") {
            return view('admin.home');
        }
        abort('404');
    }

    public function shs() {
        // pull data relating to upper primary
        if (Auth::user()->username === "admin") {
            return view('admin.home');
        }
        abort('404');
    }

    public function tertiary() {
        if (Auth::user()->username === "admin") {
            return view('admin.home');
        }
        abort('404');
    }

    static public function setSession($type) {
        session(['school' => $type]);
    }

    static public function readSession(Request $request) {
        return $request->session()->get('school');
    }

}
