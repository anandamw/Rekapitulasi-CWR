<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.kategori');
    }

    public function administrasi()
    {


        // Mendapatkan data mahasiswa dari prodi Administrasi Publik
        $mahasiswas = Mahasiswa::where('prodi', 'Administrasi Publik')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }


    public function manajemen()
    {

        $mahasiswas = Mahasiswa::where('prodi', 'Manajemen')->get();
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }



    public function akuntasi()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Akuntasi')->get();
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function agribisnis()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Agribisnis')->get();
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function pertanian()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Teknologi Hasil Pertanian')->get();
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function hukum()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Hukum')->get();


        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }
    public function sipil()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Teknik Sipil')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function informatika()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Informatika')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function kebidanan()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Kebidanan')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }
    public function keperawatan()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Keperawatan')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }


    public function ipa()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Pendidikan Ipa')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function pgsd()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'PGSD')->get();

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('A4', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('administrasi.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }
}
