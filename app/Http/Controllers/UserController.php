<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function viewLogin()
    {
        if (Auth::Check()) {
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function loginAuth(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('menu');
        } else {
            return redirect()->action('UserController@viewLogin');
        }
    }
    public function registerAuth(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm' => 'required|same:password',
        ]);
        $password = bcrypt($request->password);
        User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role' => 'Member'
        ]);
        return view('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->action('UserController@viewLogin');
    }
}
