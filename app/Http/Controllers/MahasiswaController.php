<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function detail()
    {
        $mahasiswas = mahasiswa::all();
        return view('detail', compact('mahasiswas'));
    }
    public function mahasiswa()
    {
        $data = [
            'mahasiswas' => Mahasiswa::all(),
        ];

        return view('admin.mahasiswa.home', $data);
    }


    public function create()
    {
        return view('admin.mahasiswa.mahasiswa_create');
    }
    public function store(Request $request)
    {

        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'email' => $request->email,
            'judul_ta' => $request->judul_ta,
            'kesan' => $request->kesan,
            'pesan' => $request->pesan,
            'ipk' => $request->ipk,
            'predikat' => $request->predikat,
        ];
        // dd($data);


        // Handle file upload if exists
        if ($request->hasFile('foto_mhs')) {
            $file = $request->file('foto_mhs');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename); // Save to public/uploads
            $data['foto_mhs'] = $filename; // Add to data array
        }
        // $get = Mahasiswa::create($data);



        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->first();

        return view('admin.mahasiswa.mahasiswa_edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        // Temukan data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Data yang akan diperbarui
        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'email' => $request->email,
            'judul_ta' => $request->judul_ta,
            'kesan' => $request->kesan,
            'pesan' => $request->pesan,
            'ipk' => $request->ipk,
            'predikat' => $request->predikat,
        ];

        // Handle file upload jika ada gambar baru
        if ($request->hasFile('foto_mhs')) {
            // Hapus file lama jika ada
            if ($mahasiswa->foto_mhs && file_exists(public_path('uploads/' . $mahasiswa->foto_mhs))) {
                unlink(public_path('uploads/' . $mahasiswa->foto_mhs));
            }

            // Upload file baru
            $file = $request->file('foto_mhs');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename); // Simpan ke public/uploads
            $data['foto_mhs'] = $filename; // Masukkan ke array data
        }

        // Perbarui data mahasiswa
        $mahasiswa->update($data);

        return redirect('/mahasiswa');
    }
}
