<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WargaController extends Controller
{
    //untuk menampilkan semua data warga/user
    public function index()
    {
        return view('/dashboard/semuawarga', [
            'judul' => 'Data Semua Warga!',
            'user'  => User::all()
        ]);
    }

    //untuk melihat detail data warga
    public function lihatwarga($id)
    {
        return view('/dashboard/lihat/warga', [
            'judul' => 'Detail Warga!',
            'warga' => User::where('id', $id)->get()
        ]);
    }

    //untuk menampilkan form tambah warga
    public function tambahwarga()
    {
        return view('/dashboard/tambah/warga', [
            'judul' => 'Tambahkan Data Warga Baru!'
        ]);
    }

    //masukkan data warga kedalam database
    public function buatdatawarga(Request $request)
    {
        $data = $request->validate([
            'nik'   => 'required',
            'nama'  => 'required',
            'tgl_lahir' => 'required',
            'tmpt_lahir'    => 'required',
            'alamat'    => 'required',
            'umur'  => 'required',
            'rt'    => 'required',
            'rw'    => 'required',
            'desa'  => 'required',
            'password'  => 'required|min:5'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect('/semuawarga')->with('pesan', 'Data berhasil ditambahkan!!');
    }

    //untuk menampilkn form edit warga
    public function editwarga($id)
    {
        return view('/dashboard/edit/warga', [
            'judul' => 'Edit Data Warga!',
            'warga' => User::where('id', $id)->get()
        ]);
    }

    // untuk update data warga
    public function updatewarga(Request $request, $id)
    {
        $data = $request->validate([
            'nik'   => 'required',
            'nama'  => 'required',
            'tgl_lahir' => 'required',
            'tmpt_lahir'    => 'required',
            'alamat'    => 'required',
            'umur'  => 'required',
            'rt'    => 'required',
            'rw'    => 'required',
            'desa'  => 'required',
            'password' => 'required'
        ]);

        $data['password']   = bcrypt($data['password']);

        User::where('id', $id)->update($data);

        return redirect('/semuawarga')->with('pesan', 'Data berhasil diupdate!!');
    }

    //untuk mehhpus data warga.user
    public function hapuswarga($id)
    {
        User::where('id', $id)->delete();

        return redirect('/semuawarga')->with('pesan', 'Data berhasil dihapus!');
    }
}
