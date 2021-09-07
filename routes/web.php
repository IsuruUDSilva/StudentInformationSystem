<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\student\studentController;
use App\Http\Controllers\teacher\teacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd(Auth::user());
    return view('welcome');
})->name('welcome');
//----------------------------------------------auth--------------------------------------
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store']);
Route::post('login', [LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'logOut'])->name('logout');
Route::get('active', function () {
    return view('activate');
})->name('activate');
//----------------------------------------------admin-------------------------------------
Route::get('adminHome', [adminController::class,'index'])->name('adminHome')->middleware(['admin']);
Route::get('adminTeacher',[adminController::class,'adminTeacher'])->name('adminTeacher')->middleware(['admin']);
Route::get('adminStudent',[adminController::class,'adminStudent'])->name('adminStudent')->middleware(['admin']);
Route::get('adminCourses',[adminController::class,'adminCourses'])->name('adminCourses')->middleware(['admin']);
Route::get('adminAddMember',[adminController::class,'adminAddMember'])->name('adminAddMember')->middleware(['admin']);
// Route::get('edit/{id}','adminController@adminAddMember')->name('adminAddMember');
Route::get('edit/{id}',[adminController::class,'adminEditMember'])->name('adminEditMember')->middleware(['admin']);
Route::post('edit/{id}',[adminController::class,'adminUpdateType'])->name('adminUpdateMember')->middleware(['admin']);
Route::get('editStudent/{id}',[adminController::class,'adminEditStudent'])->name('adminEditStudent')->middleware(['admin']);
Route::get('deleteStudent/{id}',[adminController::class,'adminDeleteStudent'])->name('adminDeleteStudent')->middleware(['admin']);
Route::get('editTeacher/{id}',[adminController::class,'adminEditTeacher'])->name('adminEditTeacher')->middleware(['admin']);
Route::get('deleteTeacher/{id}',[adminController::class,'adminDeleteTeacher'])->name('adminDeleteTeacher')->middleware(['admin']);

//----------------------------------------------student-----------------------------------
Route::get('studentHome', [studentController::class,'index'])->name('studentHome')->middleware(['student']);
Route::get('studentAddCourses',[studentController::class,'studentAddCourses'])->name('studentAddCourses')->middleware(['student']);
Route::get('studentViewCourses',[studentController::class,'studentViewCourses'])->name('studentViewCourses')->middleware(['student']);

//----------------------------------------------teacher------------------------------------
Route::get('teacherHome',[teacherController::class,'index'])->name('teacherHome')->middleware(['teacher']);
Route::get('teacherAddCourses',[teacherController::class,'teacherAddCourses'])->name('teacherAddCourses')->middleware(['teacher']);
Route::get('teacherViewCourses',[teacherController::class,'teacherViewCourses'])->name('teacherViewCourses')->middleware(['teacher']);
Route::get('teacherEditStudent/{id}',[teacherController::class,'teacherEditStudent'])->name('teacherEditStudent')->middleware(['teacher']);
Route::post('teacherEditStudent/{id}',[teacherController::class,'teacherUpdateType'])->name('teacherUpdateType')->middleware(['teacher']);
Route::get('teacherStudentControl',[teacherController::class,'teacherStudentControl'])->name('teacherStudentControl')->middleware(['teacher']);
// Route::get('teacherDeleteStudent/{id}',[teacherController::class,'teacherDeleteStudent'])->name('teacherDeleteStudent')->middleware(['teacher']);