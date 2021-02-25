<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function akun()
    {
        return view('ADMIN.akun');
    }

    public function su1()
    {
        return view('ADMIN.akun_operator');
    }

    public function su2()
    {
        return view('ADMIN.akun_validator');
    }

    public function su3()
    {
        return view('ADMIN.akun_tamu');
    }
}
