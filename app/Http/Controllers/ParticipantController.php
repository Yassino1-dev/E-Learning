<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use App\CourseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $coursesUser = CourseUser::where('user_id', Auth::user()->id)->get();
        
        return view('participant.courses',[
            'coursesUser' => $coursesUser
        ]);
    }

    public function show($slug){
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('participant.course',[
            'course' => $course
        ]);
    }

    public function section($slug, $section){ 
        $course = Course::where('slug', $slug)->firstOrFail();
        $section = Section::where('slug', $section)->firstOrFail();//le slug de la section
        return view('participant.section',[
            'course' => $course,
            'section' =>$section
        ] );
    }
}
