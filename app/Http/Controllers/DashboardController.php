<?php

namespace App\Http\Controllers;

use App\Models\IndikatorKinerja;
use App\Models\KinerjaUtama;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
{
    $dashboards = Laporan::latest();

    if ($request->has('tahun')) {
        $dashboards->whereYear('created_at', $request->tahun);
    }

    $dashboards = $dashboards->paginate(5);
    $indikatorKinerjas = IndikatorKinerja::all();
    $kinerjaUtamas = KinerjaUtama::all();

    // Mengambil tahun unik dari data created_at
    $tahun = Laporan::select(DB::raw('YEAR(created_at) as year'))
        ->distinct()
        ->orderBy('year', 'desc')
        ->pluck('year');

    // Menyetel tahun saat ini sebagai nilai default jika tidak ada tahun yang dipilih
    $selectedYear = $request->tahun ?? date('Y');

    return view('dashboard', compact('dashboards', 'kinerjaUtamas', 'tahun', 'selectedYear'));
}


}

