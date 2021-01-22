<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    //INPUT KATEGORI A
    public function a1()
    {
        return view('INPUT.SEKRETARIAT.a1');
    }
    public function a2()
    {
        return view('INPUT.SEKRETARIAT.a2');
    }
    public function a3()
    {
        return view('INPUT.SEKRETARIAT.a3');
    }
    public function a4()
    {
        return view('INPUT.SEKRETARIAT.a4');
    }
    public function a5()
    {
        return view('INPUT.SEKRETARIAT.a5');
    }
    public function a6()
    {
        return view('INPUT.SEKRETARIAT.a6');
    }
    public function a7()
    {
        return view('INPUT.SEKRETARIAT.a7');
    }

    //INPUT KATEGORI B
    public function b1()
    {
        return view('INPUT.KEBAHASAAN.b1');
    }
    public function b2()
    {
        return view('INPUT.KEBAHASAAN.b2');
    }
    public function b3()
    {
        return view('INPUT.KEBAHASAAN.b3');
    }
    public function b4()
    {
        return view('INPUT.KEBAHASAAN.b4');
    }
    public function b5()
    {
        return view('INPUT.KEBAHASAAN.b5');
    }
    public function b6()
    {
        return view('INPUT.KEBAHASAAN.b6');
    }
    public function b7()
    {
        return view('INPUT.KEBAHASAAN.b7');
    }
    public function b8()
    {
        return view('INPUT.KEBAHASAAN.b8');
    }

    //INPUT KATEGORI C
    public function c1()
    {
        return view('INPUT.KESASTRAAN.c1');
    }
    public function c2()
    {
        return view('INPUT.KESASTRAAN.c2');
    }
    public function c3()
    {
        return view('INPUT.KESASTRAAN.c3');
    }
    public function c4()
    {
        return view('INPUT.KESASTRAAN.c4');
    }

    //INPUT KATEGORI D
    public function d1()
    {
        return view('INPUT.KOMUNITAS.d1');
    }
    public function d2()
    {
        return view('INPUT.KOMUNITAS.d2');
    }

    //INPUT KATEGORI E
    public function e1()
    {
        return view('INPUT.PENELITIAN.e1');
    }
}
