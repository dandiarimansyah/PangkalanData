<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
     //GRAFIK S 1
     public function f1()
     {
         return view('FORUM.INTERNAL');
     }
     public function f2()
     {
         return view('FORUM.KONTAK');
     }
}
