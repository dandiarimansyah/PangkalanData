<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatorController extends Controller
{
    public function validasi()
    {
        return view('OPERATOR.input');
    }
}
