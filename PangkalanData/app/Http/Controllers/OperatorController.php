<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function input()
    {
        return view('OPERATOR.input');
    }

    public function edit()
    {
        return view('OPERATOR.edit');
    }
}
