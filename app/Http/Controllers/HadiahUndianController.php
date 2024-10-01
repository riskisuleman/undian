<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Models\HadiahUndian;
use App\Models\Pemenang;
use App\Models\Peserta;
use Illuminate\Http\Request;

class HadiahUndianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();  // Ambil semua data peserta
        $hadiah = HadiahUndian::all();  // Ambil semua data hadiah
        return view('pages.pages_hadiah.index', compact('hadiah', 'peserta'));  // Kirim data ke view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pages_hadiah.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kd_hadiah' => 'required',
            'nama_hadiah' => 'required',
            'total_hadiah' => 'required|integer',
            'gambar_hadiah' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'undian_id' => 'required|integer', 
            'peringkat_id' => 'nullable|integer', 
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar_hadiah')) {
            $filename = time() . '.' . $request->file('gambar_hadiah')->getClientOriginalExtension();
            $request->file('gambar_hadiah')->move(public_path('uploads/gambar_hadiah'), $filename);
        } else {
            return redirect()->back()->withErrors(['gambar_hadiah' => 'Gambar harus diupload.']);
        }

        $hadiah = new Hadiah();
        $hadiah->nama_hadiah = $request->nama_hadiah;
        $hadiah->total = $request->total_hadiah;
        $hadiah->gambar_hadiah = $filename; 
        $hadiah->save(); 

        $hadiahUndian = new HadiahUndian();
        $hadiahUndian->kd_hadiah = $request->kd_hadiah;
        $hadiahUndian->hadiah_id = $hadiah->id; 
        $hadiahUndian->undian_id = $request->undian_id; 
        $hadiahUndian->peringkat_id = $request->peringkat_id; 
        $hadiahUndian->save(); 

        return redirect()->route('hadiah_undian.index')->with('success', 'Hadiah undian berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HadiahUndian $hadiah_undian)
    {
        $hadiah_undian->delete();

        return redirect()->route('hadiah_undian.index')->with('success', 'Hadiah undian berhasil dihapus.');
    }

    public function simpanUndian(Request $request)
    {
        $pemenang = new Pemenang();
        $pemenang->id_peserta = Peserta::where('no_undian', $request->no_undian)->first()->id;
        $pemenang->id_hadiah_undian = HadiahUndian::where('kd_hadiah', $request->kd_hadiah)->first()->id;
        $pemenang->save();

        return response()->json(['message' => 'Undian berhasil disimpan']);
    }
}
