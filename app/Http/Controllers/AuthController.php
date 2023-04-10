<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    public function signin() {
        return view('auth.signin');
    }

    public function signup() {
        return view('auth.signup');
    }

    public function auth(Request $request) {
        $user = User::where('email', $request->email)
                ->where('password', $request->password)
                ->first();

        if($user) {
            Auth::login($user);
            return redirect()->route('status');
        }
    }

    public function create(Request $request) {
        User::create($request->all());
        return redirect()->route('signin');
    }

    public function status() {
        return view('auth.status', ['user' => Auth::user()]);
    }

    public function signout() {
        Auth::logout();
        return redirect()->route('signin');
    }
}
