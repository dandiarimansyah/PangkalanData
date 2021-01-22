<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
      //LAPORAN S 1
      public function la1()
      {
          return view('LAPORAN.SEKRETARIAT.la1');
      }
      public function la2()
      {
          return view('LAPORAN.SEKRETARIAT.la2');
      }
      public function la3()
      {
          return view('LAPORAN.SEKRETARIAT.la3');
      }
      public function la4()
      {
          return view('LAPORAN.SEKRETARIAT.la4');
      }
      public function la5()
      {
          return view('LAPORAN.SEKRETARIAT.la5');
      }
      public function la6()
      {
          return view('LAPORAN.SEKRETARIAT.la6');
      }
      public function la7()
      {
          return view('LAPORAN.SEKRETARIAT.la7');
      }

       //LAPORAN S 2
       public function lb1()
       {
           return view('LAPORAN.KEBAHASAAN.lb1');
       }
       public function lb2()
       {
           return view('LAPORAN.KEBAHASAAN.lb2');
       }
       public function lb3()
       {
           return view('LAPORAN.KEBAHASAAN.lb3');
       }
       public function lb4()
       {
           return view('LAPORAN.KEBAHASAAN.lb4');
       }
       public function lb5()
       {
           return view('LAPORAN.KEBAHASAAN.lb5');
       }
       public function lb6()
       {
           return view('LAPORAN.KEBAHASAAN.lb6');
       }
       public function lb7()
       {
           return view('LAPORAN.KEBAHASAAN.lb7');
       }
       public function lb8()
       {
           return view('LAPORAN.KEBAHASAAN.lb8');
       }

        //LAPORAN S 3
        public function lc1()
        {
            return view('LAPORAN.KESASTRAAN.lc1');
        }
        public function lc2()
        {
            return view('LAPORAN.KESASTRAAN.lc2');
        }
        public function lc3()
        {
            return view('LAPORAN.KESASTRAAN.lc3');
        }
        public function lc4()
        {
            return view('LAPORAN.KESASTRAAN.lc4');
        }

        //LAPORAN S 4
        public function ld1()
        {
            return view('LAPORAN.KOMUNITAS.ld1');
        } 
        public function ld2()
        {
            return view('LAPORAN.KOMUNITAS.ld2');
        }
    
        //LAPORAN S 5
        public function le1()
        {
            return view('LAPORAN.PENELITIAN.le1');
        } 
}
