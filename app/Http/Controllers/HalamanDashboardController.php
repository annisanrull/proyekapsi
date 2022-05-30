<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\User;
use App\Models\Tipe;
use App\Models\HasilVoting;
use Illuminate\Http\Request;

class HalamanDashboardController extends Controller
{
    //menampilkan halaman dashboard
    public function index()
    {
        return view('dashboard/index', [
            'judul' => 'Halaman Dashboard!',
            'calon' => Calon::all()
        ]);
    }

    //fungsi untuk voting
    public function voting(Request $request)
    {
        $data = $request->validate([
            'user_id'   => '',
            'calon_id'  => '',
            'voting'    => ''
        ]);

        $user = [
            'status'    => 'sudah'
        ];

        User::where('id', $data['user_id'])->update($user);

        HasilVoting::create($data);

        return redirect('/dashboard')->with('pesan', 'Terima Kasih, kamu telah melakukan voting!!');
    }

    //fungsi untu meliht jumlah osting
    public function jumlahvoting($id)
    {
        return view('/dashboard/jumlahvoting', [
            'judul' => 'Jumlah Voting!',
            'voting'    => HasilVoting::where('calon_id', $id)->get()->count(),
            'calon'     => Calon::where('id', $id)->get()
        ]);
    }

    // fungsi untuk mnmpilkan daftar tipe
    public function tipePemilihan()
    {
        return view('dashboard/tipe', [
            'judul' => 'Halman Tipe Pemilihan!',
            'tipe'  => Tipe::all()
        ]);
    }

    //fungsi untuk membuat tipe baru
    public function tambahtipe()
    {
        return view('dashboard/addtipe', [
            'judul' => 'Buat Tipe'
        ]);
    }

    //fungsi untuk memasukkan tipe baru kedalam databse
    public function inserttipe(Request $request)
    {
        $data = $request->validate([
            'nama'  => 'required',
            'alamat'    => 'required',
        ]);

        Tipe::create($data);

        return redirect('/tipe')->with('pesan', 'Data berhasil ditambahkan!');
    }
    // fungsi untuk hpus tipe
    public function hapustipe($id)
    {
        // tangkap id dan cari id bdidalam model tipe dan hapus
        Tipe::where('id', $id)->delete();

        //redirect
        return redirect('/tipe')->with('pesan', 'Data berhasil dihapus!');
    }
}
