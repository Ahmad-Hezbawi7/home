<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //

    public const SERVER_URL='http://localhost/v2/moodle35/webservice/rest/server.php';
    public const MOODLE_API_FORMAt='json';
    public const FUNCTION_NAME='auth_email_signup_user';
    public function register(){
        return view('pages.register');
    }
    public function registerNewUser(Request $request){
        Session::flash('success', 'This is a success message');

        $request->validate([
            'username'=>'required',
            'password'=>'min:6,required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
        ]);
        $serverUrl = self::SERVER_URL. '?wstoken=' . $request->_token . '&wsfunction='.self::FUNCTION_NAME.'&moodlewsrestformat='.self::MOODLE_API_FORMAt.'&username='.$request->username.'&firstname='.$request->firstname.'&lastname='.$request->lastname.'&email='.$request->email;
        $httpResponseModelCourses=Http::POST($serverUrl)->status();
        return redirect()->route('user.register.view')->with('success','created account successfully');
    }
}
