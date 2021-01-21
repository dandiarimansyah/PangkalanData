<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidatorController extends Controller
{
    //INDEX
    public function validasi()
    {
        return view('VALIDATOR.validasi');
    }
    //VALIDATOR KATEGORI A
    public function a1()
    {
        return view('VALIDATOR.SEKRETARIAT.a1');
    }
    public function a2()
    {
        return view('VALIDATOR.SEKRETARIAT.a2');
    }
    public function a3()
    {
        return view('VALIDATOR.SEKRETARIAT.a3');
    }
    public function a4()
    {
        return view('VALIDATOR.SEKRETARIAT.a4');
    }
    public function a5()
    {
        return view('VALIDATOR.SEKRETARIAT.a5');
    }
    public function a6()
    {
        return view('VALIDATOR.SEKRETARIAT.a6');
    }
    public function a7()
    {
        return view('VALIDATOR.SEKRETARIAT.a7');
    }
    //VALIDATOR KATEGORI B
    public function b1()
    {
        return view('VALIDATOR.KEBAHASAAN.b1');
    }
    public function b2()
    {
        return view('VALIDATOR.KEBAHASAAN.b2');
    }
    public function b3()
    {
        return view('VALIDATOR.KEBAHASAAN.b3');
    }
    public function b4()
    {
        return view('VALIDATOR.KEBAHASAAN.b4');
    }
    public function b5()
    {
        return view('VALIDATOR.KEBAHASAAN.b5');
    }
    public function b6()
    {
        return view('VALIDATOR.KEBAHASAAN.b6');
    }
    public function b7()
    {
        return view('VALIDATOR.KEBAHASAAN.b7');
    }
    public function b8()
    {
        return view('VALIDATOR.KEBAHASAAN.b8');
    }
    //VALIDATOR KATEGORI C
    public function c1()
    {
        return view('VALIDATOR.KESASTRAAN.c1');
    }
    public function c2()
    {
        return view('VALIDATOR.KESASTRAAN.c2');
    }
    public function c3()
    {
        return view('VALIDATOR.KESASTRAAN.c3');
    }
    public function c4()
    {
        return view('VALIDATOR.KESASTRAAN.c4');
    }
    //VALIDATOR KATEGORI D
    public function d1()
    {
        return view('VALIDATOR.KOMUNITAS.d1');
    }
    public function d2()
    {
        return view('VALIDATOR.KOMUNITAS.d2');
    }
    //VALIDATOR KATEGORI E
    public function e1()
    {
        return view('VALIDATOR.PENELITIAN.e1');
    }
}
