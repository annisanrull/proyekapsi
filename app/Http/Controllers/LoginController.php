<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // fungsi untuk user masuk ke akun
    // dan pindah ke halaman dashboard kalau 
    // proses data login berhasil / benar
    public function masuk(Request $request)
    {
        // ambl data dari form login
        $data = $request->validate([
            'nik'   => 'required',
            'password'  => 'required'
        ]);

        // kondisi kalau data yang dicari ada
        if (Auth::attempt($data)) {
            // set session
            $request->session()->regenerate();
            // dan alihkan ke route dashboard
            return redirect()->intended('/dashboard');
        }

        // kalau data tidak benar/tidak ada kirim pesan gagal dan kembali
        return back()->with('gagal', 'Gagal login, silahkan coba lagi!');
    }


    //fungsi untuk logout
    public function keluar()
    {
        Auth::logout();

        return redirect('/');
    }
}
