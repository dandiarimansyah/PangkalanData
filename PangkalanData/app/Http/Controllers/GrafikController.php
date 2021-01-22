<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikController extends Controller
{
    //GRAFIK S 1
    public function ga1()
    {
        return view('GRAFIK.SEKRETARIAT.ga1');
    }
    public function ga2()
    {
        return view('GRAFIK.SEKRETARIAT.ga2');
    }
    public function ga3()
    {
        return view('GRAFIK.SEKRETARIAT.ga3');
    }
    public function ga4()
    {
        return view('GRAFIK.SEKRETARIAT.ga4');
    }

    //GRAFIK S 2
    public function gb1()
    {
        return view('GRAFIK.KEBAHASAAN.gb1');
    }
    public function gb2()
    {
        return view('GRAFIK.KEBAHASAAN.gb2');
    }
    public function gb3()
    {
        return view('GRAFIK.KEBAHASAAN.gb3');
    }
    public function gb4()
    {
        return view('GRAFIK.KEBAHASAAN.gb4');
    }

    //GRAFIK S 3
    public function gc1()
    {
        return view('GRAFIK.KESASTRAAN.gc1');
    }

     //GRAFIK S 4
     public function gd1()
     {
         return view('GRAFIK.KOMUNITAS.gd1');
     }

      //GRAFIK S 5
      public function ge1()
      {
          return view('GRAFIK.PENELITIAN.ge1');
      }
}