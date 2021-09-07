<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\User;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminHome');
    }

    public function adminTeacher(){
        // $users = DB::select('select id,name,email,address,dob,city from users where role_id = 2');
        $users = User::where("role_id",'=',2)->paginate(10);
        return view('admin.adminTeacher.adminTeacherControl',['users'=>$users]);
    }

    public function adminStudent(){
        // $users = DB::select('select id,name,email,address,dob,city from users where role_id=3');
        $users = User::where("role_id",'=',3)->paginate(10);

        return view('admin.adminStudent.adminStudentControl',['users'=>$users]);
    }

    public function adminAddMember(){
        // $users = DB::select('select id,name,email,address,dob,city from users where role_id=4');
        $users = User::where("role_id",'=',4)->paginate(10);
        return view('admin.adminAddMember',['users'=>$users]);
    }

    public function adminEditMember($id){
        $users = DB::select('select id,role_id from users where id=?',[$id]);
        return view('admin.adminEditMember',['users'=>$users]);
        // dd($users);
    }

    public function adminUpdateType(Request $request,$id){
        // dd($id);
        
        $role_id = $request->input('role_id');
        $active = $request->input('active');
        try{
            DB::update('update users set role_id=?,active=? where id = ?', [$role_id,$active,$id]);
        }catch(\Exception $exception){
            dd($exception->getMessage());
        }
        
        echo '<script>alert("Record Updated Successfully")</script>';
        return view('admin.adminHome');
    }

    public function adminCourses(){
        return view('admin.adminCourse.adminCourseControl');
    }

    // public function viewStudent(){
    //     $users = DB::select('select id,name,email,address,dob,city from student_details where id=3');
    //     return view('adminStudent',['users'=>$users]);
    // }

    public function adminEditStudent($id){
        $users = DB::select('select id,role_id,active from users where id=?',[$id]);

        return view('admin.adminStudent.adminEditStudent',['user'=>$users[0]]);
        dd($users);
    }

    public function adminEditTeacher($id){
        $users = DB::select('select id,role_id,active from users where id=?',[$id]);

        return view('admin.adminTeacher.adminEditTeacher',['user'=>$users[0]]);
        dd($users);
    }

    public function adminDeleteStudent($id){
        DB::delete('delete from users where id = ?',[$id]);
        // $users = DB::select('select id,name,email,address,dob,city from users where role_id=3');
        $users = User::where("role_id",'=',3)->paginate(10);
        echo '<script>alert("Record Updated Successfully")</script>';
        return view('admin.adminStudent.adminStudentControl',["users"=>$users]);
    }

    public function adminDeleteTeacher($id){
        DB::delete('delete from users where id = ?',[$id]);
        // $users = DB::select('select id,name,email,address,dob,city from users where role_id=3');
        $users = User::where("role_id",'=',2)->paginate(10);
        echo '<script>alert("Record Updated Successfully")</script>';
        return view('admin.adminTeacher.adminTeacherControl',["users"=>$users]);
    }
}
