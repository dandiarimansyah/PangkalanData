<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function akun()
    {
        return view('ADMIN.akun');
    }

    public function su1()
    {
        $operator = User::all()->where("level", "operator");

        return view('ADMIN.akun_operator', compact('operator'));
    }

    public function su2()
    {
        $operator = User::all()->where("level", "validator");

        return view('ADMIN.akun_validator', compact('operator'));
    }

    public function su3()
    {
        $operator = User::all()->where("level", "tamu");

        return view('ADMIN.akun_tamu', compact('operator'));
    }
}
