<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;



class LaporanController extends Controller
{
    public function index()
{
    $latestYear = Laporan::latest('created_at')->value('created_at')->year;
    
    // Periksa apakah pengguna adalah admin
    if (Auth::user()->isAdmin()) {
        // Jika ya, ambil semua laporan dari database untuk tahun terbaru
        $laporans = Laporan::whereYear('created_at', $latestYear)->latest()->get();
    } else {
        // Jika tidak, ambil hanya laporan milik pengguna yang sedang masuk
        $laporans = Auth::user()->laporans()->whereYear('created_at', $latestYear)->get();
        $count = Auth::user()->laporans()->whereYear('created_at', $latestYear)->latest()->get();
    }

    // Render view dengan laporan yang sesuai
    return view('back-end.laporan.index', compact('laporans', 'count', 'latestYear'));
}
   

    public function create()
    {
        
        return view('back-end.laporan.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'sasaran'     => 'required|min:1',
            'indikator'   => 'required|min:1',
            'target' => 'required|min:1',
            'satuan' => 'required|min:1',
            'target_t1' => 'nullable|min:1',
            'realisasi_t1' => 'nullable|min:1',
            'persentasi_t1' => 'nullable|min:1',
            'target_t2' => 'nullable|min:1',
            'realisasi_t2' => 'nullable|min:1',
            'persentasi_t2' => 'nullable|min:1',
            'target_t3' => 'nullable|min:1',
            'realisasi_t3' => 'nullable|min:1',
            'persentasi_t3' => 'nullable|min:1',
            'target_t4' => 'nullable|min:1',
            'realisasi_t4' => 'nullable|min:1',
            'persentasi_t4' => 'nullable|min:1',
            'realisasi_ctt_t1' => 'nullable|min:1',
            'faktor_pendorong_t1' => 'nullable|min:1',
            'faktor_penghambat_t1' => 'nullable|min:1',
            'catatan_kadis_t1' => 'nullable|min:1',
            'realisasi_ctt_t2' => 'nullable|min:1',
            'faktor_pendorong_t2' => 'nullable|min:1',
            'faktor_penghambat_t2' => 'nullable|min:1',
            'catatan_kadis_t2' => 'nullable',
            'realisasi_ctt_t3' => 'nullable|min:1',
            'faktor_pendorong_t3' => 'nullable|min:1',
            'faktor_penghambat_t3' => 'nullable|min:1',
            'catatan_kadis_t3' => 'nullable',
            'realisasi_ctt_t4' => 'nullable|min:1',
            'faktor_pendorong_t4' => 'nullable|min:1',
            'faktor_penghambat_t4' => 'nullable|min:1',
            'catatan_kadis_t4' => 'nullable',
        ]);

        //upload image
       

        //create Laporann
        $laporan = new Laporan([
            
            'sasaran'     => $request->sasaran,
            'indikator'   => $request->indikator,
            'target'   => $request->target,
            'satuan'   => $request->satuan,
            'target_t1'   => $request->target_t1,
            'realisasi_t1'   => $request->realisasi_t1,
            'persentasi_t1'   => $request->persentasi_t1,
            'target_t2'   => $request->target_t2,
            'realisasi_t2'   => $request->realisasi_t2,
            'persentasi_t2'   => $request->persentasi_t2,
            'target_t3'   => $request->target_t3,
            'realisasi_t3'   => $request->realisasi_t3,
            'persentasi_t3'   => $request->persentasi_t3,
            'target_t4'   => $request->target_t4,
            'realisasi_t4'   => $request->realisasi_t4,
            'persentasi_t4'   => $request->persentasi_t4,
            'realisasi_ctt_t1' => $request->realisasi_ctt_t1,
            'faktor_pendorong_t1' => $request->faktor_pendorong_t1,
            'faktor_penghambat_t1' => $request->faktor_penghambat_t1,
            'catatan_kadis_t1' => $request->catatan_kadis_t1,
            'realisasi_ctt_t2' => $request->realisasi_ctt_t2,
            'faktor_pendorong_t2' => $request->faktor_pendorong_t2,
            'faktor_penghambat_t2' => $request->faktor_penghambat_t2,
            'catatan_kadis_t2'=>$request->catatan_kadis_t2,
            'realisasi_ctt_t3' => $request->realisasi_ctt_t3,
            'faktor_pendorong_t3' => $request->faktor_pendorong_t3,
            'faktor_penghambat_t3' => $request->faktor_penghambat_t3,
            'catatan_kadis_t3'=>$request->catatan_kadis_t3,
            'realisasi_ctt_t4' => $request->realisasi_ctt_t4,
            'faktor_pendorong_t4' => $request->faktor_pendorong_t4,
            'faktor_penghambat_t4' => $request->faktor_penghambat_t4,
            'catatan_kadis_t4'=>$request->catatan_kadis_t4,
        ]);
        $laporan->user_id = Auth::id(); // Menetapkan 'user_id' dari pengguna yang saat ini masuk
        $laporan->save();

        
        //redirect to index
        return redirect()->route('laporans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(Laporan $laporan)
    {
        return view('back-end.laporan.edit', compact('laporan'));
    }
    public function update(Request $request, Laporan $laporan)
    {
        //validate form
        $this->validate($request, [
            'sasaran'     => 'required|min:1',
            'indikator'   => 'required|min:1',
            'target' => 'required|min:1',
            'satuan' => 'required|min:1',
            'target_t1' => 'nullable|min:1',
            'realisasi_t1' => 'nullable|min:1',
            'persentasi_t1' => 'nullable|min:1',
            'target_t2' => 'nullable|min:1',
            'realisasi_t2' => 'nullable|min:1',
            'persentasi_t2' => 'nullable|min:1',
            'target_t3' => 'nullable|min:1',
            'realisasi_t3' => 'nullable|min:1',
            'persentasi_t3' => 'nullable|min:1',
            'target_t4' => 'nullable|min:1',
            'realisasi_t4' => 'nullable|min:1',
            'persentasi_t4' => 'nullable|min:1',
            'realisasi_ctt_t1' => 'nullable|min:1',
            'faktor_pendorong_t1' => 'nullable|min:1',
            'faktor_penghambat_t1' => 'nullable|min:1',
            'catatan_kadis_t1'=>'nullable|min:1',
            'realisasi_ctt_t2' => 'nullable|min:1',
            'faktor_pendorong_t2' => 'nullable|min:1',
            'faktor_penghambat_t2' => 'nullable|min:1',
            'catatan_kadis_t2'=>'nullable|min:1',
            'realisasi_ctt_t3' => 'nullable|min:1',
            'faktor_pendorong_t3' => 'nullable|min:1',
            'faktor_penghambat_t3' => 'nullable|min:1',
            'catatan_kadis_t3' => 'nullable|min:1',
            'realisasi_ctt_t4' => 'nullable|min:1',
            'faktor_pendorong_t4' => 'nullable|min:1',
            'faktor_penghambat_t4' => 'nullable|min:1',
            'catatan_kadis_t4'=>'nullable|min:1',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/laporans', $image->hashName());

            //delete old image
            Storage::delete('public/laporans/'.$laporan->image);

            //update lpaoran with new image
            $laporan->update([
            'sasaran'     => $request->sasaran,
            'indikator'   => $request->indikator,
            'target'   => $request->target,
            'satuan'   => $request->satuan,
            'target_t1'   => $request->target_t1,
            'realisasi_t1'   => $request->realisasi_t1,
            'persentasi_t1'   => $request->persentasi_t1,
            'target_t2'   => $request->target_t2,
            'realisasi_t2'   => $request->realisasi_t2,
            'persentasi_t2'   => $request->persentasi_t2,
            'target_t3'   => $request->target_t3,
            'realisasi_t3'   => $request->realisasi_t3,
            'persentasi_t3'   => $request->persentasi_t3,
            'target_t4'   => $request->target_t4,
            'realisasi_t4'   => $request->realisasi_t4,
            'persentasi_t4'   => $request->persentasi_t4,
            'realisasi_ctt_t1' => $request->realisasi_ctt_t1,
            'faktor_pendorong_t1' => $request->faktor_pendorong_t1,
            'faktor_penghambat_t1' => $request->faktor_penghambat_t1,
            'catatan_kadis_t1' => $request->catatan_kadis_t1,
            'realisasi_ctt_t2' => $request->realisasi_ctt_t2,
            'faktor_pendorong_t2' => $request->faktor_pendorong_t2,
            'faktor_penghambat_t2' => $request->faktor_penghambat_t2,
            'catatan_kadis_t2'=> $request->catatan_kadis_t2,
            'realisasi_ctt_t3' =>  $request->realisasi_ctt_t3,
            'faktor_pendorong_t3' => $request->faktor_pendorong_t3,
            'faktor_penghambat_t3' => $request->faktor_penghambat_t3,
            'catatan_kadis_t3' => $request->catatan_kadis_t3,
            'realisasi_ctt_t4' => $request->realisasi_ctt_t4,
            'faktor_pendorong_t4' => $request->faktor_pendorong_t4,
            'faktor_penghambat_t4' => $request->faktor_penghambat_t4,
            'catatan_kadis_t4'=> $request->catatan_kadis_t4,
            ]);

        } else {

            //update laporan without image
            $laporan->update([
            'sasaran'     => $request->sasaran,
            'indikator'   => $request->indikator,
            'target'   => $request->target,
            'satuan'   => $request->satuan,
            'target_t1'   => $request->target_t1,
            'realisasi_t1'   => $request->realisasi_t1,
            'persentasi_t1'   => $request->persentasi_t1,
            'target_t2'   => $request->target_t2,
            'realisasi_t2'   => $request->realisasi_t2,
            'persentasi_t2'   => $request->persentasi_t2,
            'target_t3'   => $request->target_t3,
            'realisasi_t3'   => $request->realisasi_t3,
            'persentasi_t3'   => $request->persentasi_t3,
            'target_t4'   => $request->target_t4,
            'realisasi_t4'   => $request->realisasi_t4,
            'persentasi_t4'   => $request->persentasi_t4,
            'realisasi_ctt_t1' => $request->realisasi_ctt_t1,
            'faktor_pendorong_t1' => $request->faktor_pendorong_t1,
            'faktor_penghambat_t1' => $request->faktor_penghambat_t1,
            'catatan_kadis_t1' => $request->catatan_kadis_t1,
            'realisasi_ctt_t2' => $request->realisasi_ctt_t2,
            'faktor_pendorong_t2' => $request->faktor_pendorong_t2,
            'faktor_penghambat_t2' => $request->faktor_penghambat_t2,
            'catatan_kadis_t2'=> $request->catatan_kadis_t2,
            'realisasi_ctt_t3' =>  $request->realisasi_ctt_t3,
            'faktor_pendorong_t3' => $request->faktor_pendorong_t3,
            'faktor_penghambat_t3' => $request->faktor_penghambat_t3,
            'catatan_kadis_t3' => $request->catatan_kadis_t3,
            'realisasi_ctt_t4' => $request->realisasi_ctt_t4,
            'faktor_pendorong_t4' => $request->faktor_pendorong_t4,
            'faktor_penghambat_t4' => $request->faktor_penghambat_t4,
            'catatan_kadis_t4'=> $request->catatan_kadis_t4,
            ]);
        }
        $laporan->user_id = Auth::id(); // Menetapkan 'user_id' dari pengguna yang saat ini masuk
        $laporan->save();
        //redirect to index
        return redirect()->route('laporans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(Laporan $laporan)
    {
        //delete image
        Storage::delete('public/posts/'. $laporan->image);

        //delete post
        $laporan->delete();

        //redirect to index
        return redirect()->route('laporans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
    
    public function cetakPDF(Request $request)
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        
        // Ambil tahun yang dipilih dari dropdown
        $selectedYear = $request->tahun;
        $tahun = $request->tahun ?? date('Y');
        // Memeriksa apakah tahun telah dipilih
        if ($selectedYear) {
            // Ambil laporan berdasarkan tahun yang dipilih
            $laporans = Laporan::whereYear('created_at', $selectedYear)->get();
        } else {
            // Jika tahun tidak dipilih, ambil semua laporan
            $laporans = Laporan::all();
        }
    
        $html = view('back-end.laporan.cetak_pdf', compact('laporans', 'tahun'))->render();
        
        $dompdf->loadHtml($html);
        
        $dompdf->setPaper('Legal', 'landscape');
        
        $dompdf->render();
        
        $dompdf->stream('laporan.pdf', ['Attachment' => false]);
    }
    
    



}
