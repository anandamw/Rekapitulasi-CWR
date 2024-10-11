<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

// require_once 'dompdf/autoload.inc.php';

class PdfController extends Controller
{

    public function view_pdf()
    {
        // $mahasiswas = Mahasiswa::where("prodi", "Pendidikan IPA")->get();
        $mahasiswas = Mahasiswa::where('prodi', 'Pendidikan IPA')->paginate(5); // Batasi 50 mahasiswa per halaman


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',           // Mode UTF-8 untuk text
            'format' => 'A4',            // Ukuran halaman A4
            'default_font_size' => 12,    // Ukuran font default
            'default_font' => 'Arial',    // Font default
            'margin_left' => 10,          // Margin kiri
            'margin_right' => 10,         // Margin kanan
            'margin_top' => 20,           // Margin atas
            'margin_bottom' => 20,        // Margin bawah
            'tempDir' => storage_path('app/mpdf-temp') // Temp directory untuk caching
        ]);

        // Ambil view dan render sebagai HTML
        $html = view('pdf', compact('mahasiswas'))->render();

        // Tuliskan HTML ke PDF
        $mpdf->WriteHTML($html);

        // Output PDF ke browser
        $mpdf->Output('mahasiswa.pdf', 'I', true); // 'I' untuk inline view di browser
    }
}
