<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        // dd($request->userName,$request->passWord);
        $credentials = $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if(Auth::user()->role_id ==3){
                return redirect()->intended("/studentHome");
            }
            else if(Auth::user()->role_id ==2){
                return redirect()->intended("/teacherHome");
            }
            else if(Auth::user()->role_id == 1){
                return redirect()->intended("/adminHome");
            }

            
        }
        else{
           return  redirect()->intended("/login");
        }


        
    }

    function logOut(Request $request){
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
