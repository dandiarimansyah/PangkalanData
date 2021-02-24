<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function akun()
    {
        return view('ADMIN.akun');
    }
}
