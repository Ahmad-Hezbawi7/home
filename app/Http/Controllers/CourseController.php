<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    //
    public const TOKEN='07d32e39badf95f33d2eb3d271062090';
    public const SERVER_URL='https://platform.educentive.tech/webservice/rest/server.php';
    public const MOODLE_API_FORMAt='json';
    public function getAllCourses(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://platform.educentive.tech/webservice/rest/server.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'wstoken=07d32e39badf95f33d2eb3d271062090&wsfunction=core_course_get_courses&moodlewsrestformat=json',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response,true);

    }
    public function getCourseById($id){
        $functionname = 'core_course_get_courses';
        $course_id=$id;
        $serverUrl = self::SERVER_URL. '?wstoken=' . self::TOKEN . '&wsfunction='.$functionname.'&moodlewsrestformat='.self::MOODLE_API_FORMAt.'&options[ids][0]='.$course_id;
        $httpResponseModelCourses=Http::POST($serverUrl);
        return response()->json($httpResponseModelCourses->body(),$httpResponseModelCourses->status());
    }
}
