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
Route::get('adminAddStudent',[adminController::class,'adminAddStudent'])->name('adminAddStudent')->middleware(['admin']);


//----------------------------------------------student-----------------------------------
Route::get('studentHome', [studentController::class,'index'])->name('studentHome')->middleware(['student']);
Route::get('studentAddCourses',[studentController::class,'studentAddCourses'])->name('studentAddCourses')->middleware(['student']);
Route::get('studentViewCourses',[studentController::class,'studentViewCourses'])->name('studentViewCourses')->middleware(['student']);

//----------------------------------------------teacher------------------------------------
Route::get('teacherHome',[teacherController::class,'index'])->name('teacherHome')->middleware(['teacher']);
Route::get('teacherAddCourses',[teacherController::class,'teacherAddCourses'])->name('teacherAddCourses')->middleware(['teacher']);
Route::get('teacherViewCourses',[teacherController::class,'teacherViewCourses'])->name('teacherViewCourses')->middleware(['teacher']);
Route::get('teacherAddStudent',[teacherController::class,'teacherAddStudent'])->name('teacherAddStudent')->middleware(['teacher']);
Route::get('teacherStudent',[teacherController::class,'teacherStudent'])->name('teacherStudent')->middleware(['teacher']);