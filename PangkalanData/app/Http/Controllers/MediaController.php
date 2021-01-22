<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //MEDIA S 1
    public function ma1()
    {
        return view('MEDIA.SEKRETARIAT.ma1');
    }
    public function ma2()
    {
        return view('MEDIA.SEKRETARIAT.ma2');
    }

    //MEDIA S 2
    public function mb1()
    {
        return view('MEDIA.KEBAHASAAN.mb1');
    }
    public function mb2()
    {
        return view('MEDIA.KEBAHASAAN.mb2');
    }
    public function mb3()
    {
        return view('MEDIA.KEBAHASAAN.mb3');
    }
    public function mb4()
    {
        return view('MEDIA.KEBAHASAAN.mb4');
    }
    public function mb5()
    {
        return view('MEDIA.KEBAHASAAN.mb5');
    }
    public function mb6()
    {
        return view('MEDIA.KEBAHASAAN.mb6');
    }
    public function mb7()
    {
        return view('MEDIA.KEBAHASAAN.mb7');
    }
    
    //MEDIA S 3
    public function mc1()
    {
        return view('MEDIA.KESASTRAAN.mc1');
    }
    public function mc2()
    {
        return view('MEDIA.KESASTRAAN.mc2');
    }
    public function mc3()
    {
        return view('MEDIA.KESASTRAAN.mc3');
    }
    public function mc4()
    {
        return view('MEDIA.KESASTRAAN.mc4');
    }

     //MEDIA S 5
     public function me1()
     {
         return view('MEDIA.PENELITIAN.me1');
     }
}
