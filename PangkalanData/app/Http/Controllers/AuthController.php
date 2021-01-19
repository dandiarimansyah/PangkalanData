<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function proses_login(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $emailPassword = $request->only('username', 'password');

        if (Auth::attempt($emailPassword)) {
            $user = Auth::user();
            if ($user->level == 'operator') {
                return redirect()->intended('operator/input');
            } else if ($user->level == 'validator') {
                return redirect()->intended('validator/validasi');
            }
            return redirect()->intended('/');
        }
        return redirect('login');
        // return back();
    }
}
