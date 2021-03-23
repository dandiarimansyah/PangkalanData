<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Foto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'username' =>  ['required', 'unique:users'],
            'password' =>  ['required'],
        ]);

        $random = Str::random(10);
        // $email = $random . "@gmail.com";

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        // $data->email = $email;
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
            'username' =>  ['required', 'unique:users'],
            'password' =>  ['required'],
        ]);

        $random = Str::random(10);
        // $email = $random . "@gmail.com";

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        // $data->email = $email;
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
            'username' =>  ['required', 'unique:users'],
            'password' =>  ['required'],
        ]);

        $random = Str::random(10);
        // $email = $random . "@gmail.com";

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        // $data->email = $email;
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
            'username' =>  ['required', 'unique'],
        ]);

        $data = User::where('id', $id)
            ->update([
                'name' => $request->get('name'),
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password')),
            ]);

        return back()->with('toast_success', 'Akun Berhasil Diedit!');
    }

    public function kelola_foto()
    {
        $foto_login = Foto::where('id', '1')->get();
        $foto_beranda = Foto::where('id', '!=', '1')->get();

        return view('ADMIN.kelola_foto', compact('foto_login', 'foto_beranda'));
    }

    public function tambah_foto_login(Request $request)
    {
        $request->validate([
            'file' => ['required', 'max:10000', 'image'],
        ]);

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('file')->storeAs('public/Foto', $filenameSimpan);

        $data = new Foto();
        $data->id = 1;
        $data->gambar = $filenameSimpan;
        $data->save();

        return back()->with('toast_success', 'Foto Berhasil Diunggah!');
    }

    public function tambah_foto_beranda(Request $request)
    {
        $request->validate([
            'file' => ['required', 'max:10000', 'image'],
        ]);

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('file')->storeAs('public/Foto', $filenameSimpan);

        $data = new Foto();
        $data->gambar = $filenameSimpan;
        $data->save();

        return back()->with('toast_success', 'Foto Berhasil Diunggah!');
    }

    public function update_foto($id, Request $request)
    {
        $request->validate([
            'file' => ['required', 'max:10000', 'image'],
        ]);

        $data = Foto::find($id);
        Storage::delete('public/Foto/' . $data->gambar);

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('file')->storeAs('public/Foto', $filenameSimpan);

        $data = Foto::where('id', $id)
            ->update([
                'gambar' => $filenameSimpan
            ]);

        return back()->with('toast_success', 'Foto Berhasil Diubah!');
    }

    public function hapus_foto($id)
    {
        $data = Foto::find($id);
        Storage::delete($data->gambar);

        $data = Foto::where('id', $id)
            ->delete();

        return back()->with('toast_success', 'Foto Berhasil Dihapus!');
    }
}
