<?php

use App\Models\Mahasiswa;

if (!function_exists('mahasiswas')) {
    function HelperMahasiswa()
    {

        $data = [];
        $kategori = Mahasiswa::all();
        foreach ($kategori as $get) {
            $data[] = [
                'npm' => $get->npm,
                'prodi' => $get->prodi
            ];
        }
        return $data;
    }
}
