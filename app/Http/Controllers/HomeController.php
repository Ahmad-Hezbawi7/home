<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index(){
        $news=new NewsController();
        $newsList=$news->getActiveNews();
        $courses=new CourseController();
        $coursesList=$courses->getAllCourses();



        return view('pages.home',compact('coursesList','newsList'));
    }
}
