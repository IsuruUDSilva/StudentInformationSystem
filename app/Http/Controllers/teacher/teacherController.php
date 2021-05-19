<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){
        return view('teacher.teacherHome');
    }

    public function teacherAddCourses(){
        return view('teacher.Courses.teacherAddCourses');
    }

    public function teacherViewCourses(){
        return view('teacher.Courses.teacherViewCourses');
    }

    public function teacherAddStudent(){
        return view('teacher.Student.teacherAddStudent');
    }

    public function teacherStudent(){
        return view('teacher.Student.teacherStudentControl');
    }
}
