<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class NonAdminLoginController extends Controller
{
    public function getLogin()
    {
        return view("auth.user-login");
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = [
            'email' => $email,
            'password' => $password,
            'isAdmin' => 0
        ];
        if (!Auth::attempt($credentials)) {

            return back()->withErrors("Wrong Credentials. Please try again");
        }

        return redirect()->intended('admin/dashboard');
    }
}
