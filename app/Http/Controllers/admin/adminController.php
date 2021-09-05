<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminHome');
    }

    public function adminTeacher(){
        return view('admin.adminTeacher.adminTeacherControl');
    }

    public function adminStudent(){
        $users = DB::select('select id,name,email,address,dob,city from users where role_id=3');
        return view('admin.adminStudent.adminStudentControl',['users'=>$users]);
    }

    public function adminAddStudent(){
        return view('admin.adminStudent.adminAddStudent');
    }

    public function adminCourses(){
        return view('admin.adminCourse.adminCourseControl');
    }

    // public function viewStudent(){
    //     $users = DB::select('select id,name,email,address,dob,city from student_details where id=3');
    //     return view('adminStudent',['users'=>$users]);
    // }
}
