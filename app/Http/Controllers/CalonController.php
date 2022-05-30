<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CalonController extends Controller
{

    //fungsi untuk menampilkan semua dafftr calon
    public function index()
    {
        return view('dashboard/semuacalon', [
            'judul' => 'Semua Calon!',
            'calon' => Calon::all()
        ]);
    }

    //fungsi untuk melihat detail calon
    public function lihatcalon($id)
    {
        return view('dashboard/lihat/calon', [
            'judul' => 'Detail Calon!',
            'calon' => Calon::where('id', $id)->get()
        ]);
    }

    //fungsi untuk membuat atau menambahkan clon baru
    public function calon()
    {
        return view('dashboard/tambah/calon', [
            'judul' => 'Tambah Calon Baru!',
            'tipe'  => Tipe::all()
        ]);
    }

    public function tambah(Request $request)
    {
        //ambil data dengan menggunakan fungsi request
        //dan lakukan validasi data
        $data = $request->validate([
            'nama'  => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir'  => 'required',
            'alamat'    => 'required',
            'umur_sekarang' => 'required',
            'tipe_id' => 'required',
            'visi'  => 'required',
            'misi'  => 'required',
            'gambar'    => 'required|image|file|max:1024'
        ]);

        //kalau ada upload gambar ambali datanya
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('photo-calon'), $filename);
            $data['gambar'] = $filename;
        }

        //simpan kedalam dataabse
        Calon::create($data);

        //redirect
        return redirect('/semuacalon')->with('pesan', 'Data berhasil ditambahkan!');
    }


    //fungsi untuk edit calon
    public function editcalon($id)
    {
        return view('dashboard/edit/calon', [
            'judul' => 'Edit Calon!',
            'calon' => Calon::where('id', $id)->get(),
            'tipe'  => Tipe::all()
        ]);
    }

    public function updatecalon(Request $request, $id)
    {
        //ambil data dengan menggunakan fungsi request
        //dan lakukan validasi data
        $data = $request->validate([
            'nama'  => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir'  => 'required',
            'alamat'    => 'required',
            'umur_sekarang' => 'required',
            'tipe_id' => 'required',
            'visi'  => 'required',
            'misi'  => 'required',

        ]);

        if ($request->file('gambar')) {

            if ($request->gambarlama) {
                Storage::delete($request->gambarlama);
            }
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('photo-calon'), $filename);
            $data['gambar'] = $filename;
        }

        Calon::where('id', $id)->update($data);

        return redirect('/semuacalon')->with('pesan', 'Data berhasil diupdate!');
    }

    //funsgi untuk menghpus calon
    public function hapuscalon($id)
    {

        //tangkap id dan kuari untuk menghpus calon
        //bardsrkan id
        Calon::where('id', $id)->delete();

        //kalo berhasi kembali dan kirim pesan
        return redirect('/semuacalon')->with('pesan', 'Data berhasil dihapus!!');
    }
}
