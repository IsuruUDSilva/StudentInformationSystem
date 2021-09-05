<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Nullable;

class RegisterController extends Controller
{


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required|max:255',
                'address' => 'required',
                'city' => 'required',
                'email' => 'required|max:255',
                'dob' => 'required',
                'username' => 'required|max:255',
                'password' => 'required'
            ]
        );

        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'email' => $request->email,
            'dob' => $request->dob,
            'roll_id' => $request->role_id,
            'username' => $request->username,
            'password' => Hash::make($request->password)

        ]);

        // Auth::attempt(['email' => $email, 'password' => $password])


        return redirect()->route('activate');
    }
}
