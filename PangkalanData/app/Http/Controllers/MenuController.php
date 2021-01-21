<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
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
    public function forum()
    {
        $user = Auth::user();

        return view('forum', compact('user'));
    }
}
