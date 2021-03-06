<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ForumController;
use App\Models\Foto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function beranda()
    {
        $user = Auth::user();
        $foto_beranda = Foto::where('id', '<>', "1")->get();

        return view('beranda', compact('user', 'foto_beranda'));
    }
    public function media()
    {
        $user = Auth::user();

        return view('media', compact('user'));
    }
    public function laporan()
    {
        $user = Auth::user();

        return view('laporan', compact('user'));
    }
    public function grafik()
    {
        $user = Auth::user();

        return view('grafik', compact('user'));
    }
    // public function forum()
    // {
    //     $user = Auth::user();
    //     $forum = Forum::all();

    //     return view('forum', compact('user', 'forum'));
    // }
}
