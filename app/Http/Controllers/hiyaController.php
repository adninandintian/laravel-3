<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hiyaController extends Controller
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
        return View::make('belajar.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
       'full_name'  => 'required',
       'email'      => 'required|email',
       'message'    => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);
      // process the login
      if ($validator->fails()) {
       return Redirect::to('contact/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
      } else {
       // store
       $contact             = new Contact;
       $contact->full_name  = Input::get('full_name');
       $contact->email      = Input::get('email');
       $contact->message    = Input::get('message');
       $contact->save();
       // redirect
       Session::flash('message', 'Input data sukses!');
       return Redirect::to('contact');
      }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(tutorial $tutorial)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(tutorial $tutorial)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tutorial $tutorial)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutorial $tutorial)
    {
        //
    }
}

