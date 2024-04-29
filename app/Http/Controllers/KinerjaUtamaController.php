<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KinerjaUtama;

class KinerjaUtamaController extends Controller
{
    public function index()
    {
        $kinerjaUtamas = KinerjaUtama::all();
        return view('back-end.perjanjiankinerja.index', compact('kinerjaUtamas'));
    }

    public function create()
    {
        return view('back-end.perjanjiankinerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kinerja_utama' => 'required|string|max:255',
        ]);

        KinerjaUtama::create($request->only('kinerja_utama'));

        return redirect()->route('kinerja.index')->with('success', 'Kinerja Utama berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kinerjaUtama = KinerjaUtama::find($id);
        return view('back-end.perjanjiankinerja.edit', compact('kinerjaUtama'));
    }

    public function update(Request $request, KinerjaUtama $kinerjaUtama)
    {
        $request->validate([
            'kinerja_utama' => 'required|string|max:255',
        ]);

        $kinerjaUtama->update($request->only('kinerja_utama'));

        return redirect()->route('kinerja.index')->with('success', 'Kinerja utama berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $kinerjaUtama = KinerjaUtama::findOrFail($id);
            $kinerjaUtama->delete();
            return redirect()->route('kinerja.index')->with('success', 'Kinerja Utama berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus kinerja utama: ' . $e->getMessage());
        }
    }
}
