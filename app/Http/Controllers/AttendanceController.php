<?php

namespace p4\Http\Controllers;

//use Illuminate\Http\Request;
use Auth;

use p4\Http\Requests;
use p4\Http\Controllers\Controller;
use Request;

class AttendanceController extends Controller
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


    $user = Auth::user();
    $currentUsersKids = $user->kids;

    foreach ($currentUsersKids as $kids) {

        $maxid = $kids->attendancestatus()->max('id');
        $attendance =$kids->attendancestatus()->find($maxid);

        //test kids attendance status
        if ($attendance["attendanceStatus"] == 'signin'){
            $newattendstat = "signout";
            echo $newattendstat;
        }
        elseif($attendance["attendanceStatus"] == 'signout')
        {
            $newattendstat = 'signin';
            echo $newattendstat;
        }

        //build array for a kids attendance parameters
        $kidcurrentstatus2  = array('id' => $maxid, 'attendstat' => $attendance["attendanceStatus"], 
            'newattendstat' => $newattendstat,
        'kid_id' => $attendance['kid_id'], 'picture' => $kids->picture, 'fullname'=>$kids->fullname);
       $kidcurrentstatus1 [] = $kidcurrentstatus2;
    }

      
    
    return view('attendanceform')->with('currentUsersKids', $currentUsersKids)
    ->with('user', $user)->with('kidcurrentstatus1', $kidcurrentstatus1);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();

        return $input;
       
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
}
