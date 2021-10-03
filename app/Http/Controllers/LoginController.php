<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;



class LoginController extends Controller
{
    //
    public const SERVER_URL='https://platform.educentive.tech/login/token.php';
    public const SERVICE='moodle_mobile_app';
    public const MOODLE_API_FORMAt='json';
    public const FUNCTION_NAME='authenticate_user_login';
//auth_user_login
    public function login(){
        return view('pages.login');
    }
    public function checkLogin(Request $request){
//        $serverUrl = self::SERVER_URL.
//            '?service='.self::SERVICE.
//            '&username='.$request->username.
//            '&password='.$request->password;
//        $httpResponseModelCourses=Http::POST($serverUrl);
        return redirect()->url('');
    }


}
