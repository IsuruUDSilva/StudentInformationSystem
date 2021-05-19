<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminHome');
    }

    public function adminTeacher(){
        return view('admin.adminTeacher.adminTeacherControl');
    }

    public function adminStudent(){
        return view('admin.adminStudent.adminStudentControl');
    }

    public function adminCourses(){
        return view('admin.adminCourse.adminCourseControl');
    }

}
