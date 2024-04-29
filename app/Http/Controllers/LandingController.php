<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class LandingController extends Controller
{
    public function index()
    {
        // Mengambil data pegawai ASN dengan nilai tertinggi pada triwulan terakhir
        $pegawaiASN = Pegawai::where('jenis', 'ASN')
            ->latest('triwulan')
            ->first();
        
        // Mengambil data pegawai non-ASN dengan nilai tertinggi pada triwulan terakhir
        $pegawaiNonASN = Pegawai::where('jenis', 'Non-ASN')
            ->latest('triwulan')
            ->first();

        // Kirim data pegawai ASN dan non-ASN ke halaman welcome.blade.php
        return view('front-end.landing', compact('pegawaiASN', 'pegawaiNonASN'));
    }
}