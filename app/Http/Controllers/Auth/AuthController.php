<?php

namespace p4\Http\Controllers\Auth;

use p4\User;
use Validator;

use p4\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
 * Log the user out of the application.
 *
 * @return \Illuminate\Http\Response
 */
    public function postRegister(Request $request)
 {
    $validator = $this->validator($request->all());
    if ($validator->fails())
    {
        $this->throwValidationException(
            $request, $validator
        );
    }
    Auth::login($this->create($request->all()));     
    // Now you can redirect!
    return redirect('/childregister');

   }




    public function getLogout()
    {
        \Auth::logout();
        \Session::flash('flash_message','You have been logged out.');
        \Session::flush();
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
    # Where should the user be redirected to if their login succeeds?
    protected $redirectPath = '/signattendance';

    # Where should the user be redirected to if their login fails?
    protected $loginPath = '/login';

    # Where should the user be redirected to after logging out?
    protected $redirectAfterLogout = '/';

    #Where user is redirected after registration
    protected $redirectTo = '/childregister';




    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout', 'guestLogin', 'getRegister']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


}

