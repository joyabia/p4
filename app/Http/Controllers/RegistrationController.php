<?php

namespace p4\Http\Controllers;

//use Illuminate\Http\Request;
use Auth;

use p4\Http\Requests;
use p4\Http\Controllers\Controller;
use Request;
use p4\Http\Requests\RegistrationFormRequest;


class RegistrationController extends Controller
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
        
           
            return view('/kidregister');
    
}

public function cancelkidreg()
    {
        
        //get the chidren attached to the user account
        $user = Auth::user();
        
        $currentRegKids = $user->kids;
        return view('/cancelregform')->with('currentRegKids', $currentRegKids);
    }
        

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationFormRequest $request)
    {
        $input = Request::all();
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $birthday = $request->input('birthday');


        $kid =\p4\Kid::create(Request::all());
        $kidid = $kid->id;
        
        //get the authenticated user
        $user = Auth::user();

        //associate the kid to the user
        $user->kids()->attach($kid);

        //Give the kid an attendance of sign out
        $attendance =  \p4\Attendance::create(['kid_id'=>$kidid, 'attendancestatus' => 0]);

        

        //\p4\Attendance::create(['attendancestatus' => 0]);
        
        return redirect('/childregister/create');
    }

    /**
     * Display the specified resource.
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
       $kid = \p4\Kid::findOrFail($id);       
       $kid->delete();
       return  $kid;
        
    }
}
