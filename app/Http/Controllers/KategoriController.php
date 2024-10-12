<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class KategoriController extends Controller
{
    public function index()
    {


        return view('admin.kategori.kategori');
    }
}
