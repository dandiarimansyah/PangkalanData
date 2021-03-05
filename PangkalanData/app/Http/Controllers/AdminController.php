<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function akun()
    {
        return view('ADMIN.akun');
    }

    public function su1()
    {
        $operator = User::all()->where("level", "operator");

        return view('ADMIN.akun_operator', compact('operator'));
    }

    public function tambah_su1(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' =>  ['required'],
            'password' =>  ['required'],
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = "tes@gmail.com";
        $data->level = "operator";
        $data->save();

        return redirect('/admin/akun_operator')->with('toast_success', 'Akun Berhasil Ditambahkan!');
    }

    public function hapus_su1($id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/admin/akun_operator')->with('toast_success', 'Akun Berhasil Dihapus!');
    }

    public function su2()
    {
        $operator = User::all()->where("level", "validator");

        return view('ADMIN.akun_validator', compact('operator'));
    }

    public function tambah_su2(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' =>  ['required'],
            'password' =>  ['required'],
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = "tes@gmail.com";
        $data->level = "validator";
        $data->save();

        return redirect('/admin/akun_validator')->with('toast_success', 'Akun Berhasil Ditambahkan!');
    }

    public function hapus_su2($id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/admin/akun_validator')->with('toast_success', 'Akun Berhasil Dihapus!');
    }

    public function su3()
    {
        $operator = User::all()->where("level", "tamu");

        return view('ADMIN.akun_tamu', compact('operator'));
    }

    public function tambah_su3(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' =>  ['required'],
            'password' =>  ['required'],
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = "tes@gmail.com";
        $data->level = "tamu";
        $data->save();

        return redirect('/admin/akun_tamu')->with('toast_success', 'Akun Berhasil Ditambahkan!');
    }
    public function hapus_su3($id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/admin/akun_tamu')->with('toast_success', 'Akun Berhasil Dihapus!');
    }

    public function update_akun($id, Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required'],
        ]);

        $data = User::where('id', $id)
            ->update([
                'name' => $request->get('name'),
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password')),
            ]);

        return back()->with('toast_success', 'Akun Berhasil Diedit!');
    }
}
