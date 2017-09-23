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

    public function lowerPrimary() {
        //pull data relating to lowerprimary
        if (Auth::user()->username === "admin") {
            return view('admin.home');
        } else {
            abort('404');
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

}
