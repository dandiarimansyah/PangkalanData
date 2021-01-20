<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function media()
    {
        $user = Auth::user();
        $role = $user->level;

        return view('media', compact('role', 'user'));
    }
    public function laporan()
    {
        $user = Auth::user();
        $role = $user->level;

        return view('laporan', compact('role', 'user'));
    }
    public function grafik()
    {
        $user = Auth::user();
        $role = $user->level;

        return view('grafik', compact('role', 'user'));
    }
    public function forum()
    {
        $user = Auth::user();
        $role = $user->level;

        return view('forum', compact('role', 'user'));
    }
}
