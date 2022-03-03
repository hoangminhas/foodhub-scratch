<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $user = $request->except('_token', 'confirmPassword');
        $user['password'] = Hash::make($user['password']);
//        dd($user);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }

    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $user = $request->except('_token');
        if(Auth::attempt($user)) {
            return redirect()->route('users.index');
        } else {
            Session::flash('error', 'Wrong email or password');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
