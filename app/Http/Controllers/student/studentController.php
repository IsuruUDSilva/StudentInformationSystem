<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    
    public function index(){
        dd(auth()->user());
        return view('student.studentHome');
    }

    public function studentAddCourses(){
        return view('student.courses.studentAddCourses');
    }

    public function studentViewCourses(){
        return view('student.courses.studentViewCourse');
    }
}
