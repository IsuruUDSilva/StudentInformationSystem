<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\student\studentController;
use App\Http\Controllers\teacher\teacherController;
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
    return view('welcome');
})->name('welcome');
//----------------------------------------------auth--------------------------------------
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store']);

//----------------------------------------------admin-------------------------------------
Route::get('adminHome', [adminController::class,'index'])->name('adminHome');
Route::get('adminTeacher',[adminController::class,'adminTeacher'])->name('adminTeacher');
Route::get('adminStudent',[adminController::class,'adminStudent'])->name('adminStudent');
Route::get('adminCourses',[adminController::class,'adminCourses'])->name('adminCourses');


//----------------------------------------------student-----------------------------------
Route::get('studentHome', [studentController::class,'index'])->name('studentHome');
Route::get('studentAddCourses',[studentController::class,'studentAddCourses'])->name('studentAddCourses');
Route::get('studentViewCourses',[studentController::class,'studentViewCourses'])->name('studentViewCourses');

//----------------------------------------------teacher------------------------------------
Route::get('teacherHome',[teacherController::class,'index'])->name('teacherHome');
Route::get('teacherAddCourses',[teacherController::class,'teacherAddCourses'])->name('teacherAddCourses');
Route::get('teacherViewCourses',[teacherController::class,'teacherViewCourses'])->name('teacherViewCourses');
Route::get('teacherAddStudent',[teacherController::class,'teacherAddStudent'])->name('teacherAddStudent');
Route::get('teacherStudent',[teacherController::class,'teacherStudent'])->name('teacherStudent');