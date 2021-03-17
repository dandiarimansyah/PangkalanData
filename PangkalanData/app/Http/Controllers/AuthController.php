<?php

namespace App\Http\Controllers;

use App\Models\Foto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $foto_login = Foto::where('id', "1")->get();

        return view('login', compact('foto_login'));
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Nama Pengguna WAJIB diisi!',
                'password.required' => 'Kata Sandi WAJIB diisi!'
            ]
        );

        $emailPassword = $request->only('username', 'password');

        if (Auth::attempt($emailPassword)) {
            $user = Auth::user();
            if ($user->level == 'operator') {
                return redirect()->intended('/beranda');
            } else if ($user->level == 'validator') {
                return redirect()->intended('/beranda');
            } else if ($user->level == 'tamu') {
                return redirect()->intended('/beranda');
            } else if ($user->level == 'admin') {
                return redirect()->intended('/beranda');
            }
            return redirect()->intended('/login');
        }
        return redirect('login')->with(['error' => 'Nama Pengguna/Password salah!']);
    }
}
