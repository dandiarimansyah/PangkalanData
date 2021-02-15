<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    // public function forum()
    //  {
    //     $forum = Forum::all();

    //     return view('FORUM', compact('forum'));
    //  }

     //GRAFIK S 1
     public function f1()
     {
        //  $request->validate([
        //      'pengguna' => ['required'],
        //      'balai' => ['required'],
        //      'lengkap' => ['required'],
        //      'saran' => ['required'],
        //  ]);

        // $data = new Forum();
        // $data->pengguna = $request->pengguna;
        // $data->balai = $request->balai;
        // $data->lengkap = $request->lengkap;
        // $data->saran = $request->saran;
        // $data->save();

        // return redirect('/forum')->with('status', 'Data Berhasil Ditambahkan!');

        // $forum = Forum::all();

        return view('FORUM.INTERNAL');
     }

     public function Store_f1(Request $request)
     {
        $request->validate([
            'pengguna' => ['required'],
            'balai' => ['required'],
            'lengkap' => ['required'],
            'saran' => ['required'],
        ]);

       $data = new Forum();
       $data->pengguna = $request->pengguna;
       $data->balai = $request->balai;
       $data->lengkap = $request->lengkap;
       $data->saran = $request->saran;
       $data->save();

       return redirect('/forum')->with('status', 'Data Berhasil Ditambahkan!');
     }

     public function f2()
     {
         return view('FORUM.KONTAK');

     }
}
