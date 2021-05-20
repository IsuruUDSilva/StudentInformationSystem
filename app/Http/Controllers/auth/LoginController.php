<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'userName' => 'required|max:255',
            'passWord' => 'required'
        ]);

        
    }
}
