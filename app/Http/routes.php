<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signin', function () {

	$currentUsersKids = Auth::user()->kids;  
    return view('attendance')->with('currentUsersKids', $currentUsersKids);
});



Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/auth/logout', function () {
    return view('auth/logout');
});


Route::get('/confirm-login-worked', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    
    
   

    if($user) {
        echo 'You are logged in.';
        
        foreach($user->kids as $kid){
        	echo $kid->firstname;
        	echo"---------------------";
        }
    } else {
        echo 'You are not logged in.';
    }

    return;

});

Route::get('/home', function () {

	$currentUsersKids = Auth::user()->kids();  
    return view('attendance')->with('currentUsersKids', $currentUsersKids);
});