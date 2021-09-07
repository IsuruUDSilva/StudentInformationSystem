<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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

    // public function teacherEditStudent(){
    //     return view('teacher.Student.teacherEditStudent');
    // }

    public function teacherStudentControl(){
        $users = User::where("role_id",'=',3)->paginate(10);
        // dd($users);
        return view('teacher.Student.teacherStudentControl',['users'=>$users]);
    }

    public function teacherEditStudent($id){
        $users = DB::select('select id,role_id,active from users where id=?',[$id]);

        return view('teacher.student.teacherEditStudent',['user'=>$users[0]]);
        // dd($users);
    }

    public function teacherUpdateType(Request $request,$id){
        // dd($id);
        
        // $role_id = $request->input('role_id');
        $active = $request->input('active');
        try{
            DB::update('update users set active=? where id = ?', [$active,$id]);
        }catch(\Exception $exception){
            dd($exception->getMessage());
        }
        
        echo '<script>alert("Record Updated Successfully")</script>';
        return view('teacher.teacherHome');
    }

    // public function teacherDeleteStudent($id){
    //     DB::delete('delete from users where id = ?',[$id]);
    //     // $users = DB::select('select id,name,email,address,dob,city from users where role_id=3');
    //     $users = User::where("role_id",'=',3)->paginate(10);
    //     echo '<script>alert("Record Updated Successfully")</script>';
    //     return view('teacher.student.teacherStudentControl',["users"=>$users]);
    // }
}
