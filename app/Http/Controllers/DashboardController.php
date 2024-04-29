<?php

namespace App\Http\Controllers;

use App\Models\IndikatorKinerja;
use App\Models\KinerjaUtama;
use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // get laporans with pagination
    $dashboards = Laporan::latest()->paginate(5);
    $indikatorKinerjas = IndikatorKinerja::all();
    $kinerjaUtamas = KinerjaUtama::all();
    // render view with laporans
    return view('dashboard', compact('dashboards', 'kinerjaUtamas'));
}

}
