<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    //
    public const TOKEN='07d32e39badf95f33d2eb3d271062090';
    public const SERVER_URL='https://platform.educentive.tech/webservice/rest/server.php';
    public const MOODLE_API_FORMAt='json';
    public function getActiveNews(){
//        core_blog_get_entries
        $functionname = 'core_blog_get_entries';
        $serverUrl = self::SERVER_URL. '?wstoken=' . self::TOKEN . '&wsfunction='.$functionname.'&moodlewsrestformat='.self::MOODLE_API_FORMAt;
        $httpResponseModelCourses=Http::POST($serverUrl);
        return response()->json($httpResponseModelCourses->body(),$httpResponseModelCourses->status());
    }
    public function getNewById($id){
        $functionname = 'core_blog_get_entries';
        $singleNewsId=$id;
        $serverUrl = self::SERVER_URL. '?wstoken=' . self::TOKEN . '&wsfunction='.$functionname.'&moodlewsrestformat='.self::MOODLE_API_FORMAt.'&options[ids][0]='.$singleNewsId;
        $httpResponseModelCourses=Http::POST($serverUrl);
        return response()->json($httpResponseModelCourses->body(),$httpResponseModelCourses->status());
    }
}
