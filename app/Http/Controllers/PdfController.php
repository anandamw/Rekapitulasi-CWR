<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function view_pdf()
    {
        $mahasiswas = Mahasiswa::take(6)->get();
        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4'
        ]);
        $mpdf->WriteHTML(view('detail', compact('mahasiswas')));
        $mpdf->Output('document.pdf', 'D');
    }
}
