<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use App\Models\HadiahUndian;
use App\Models\Pemenang;
use App\Models\Peserta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();  // Ambil semua data peserta
        $hadiah = Hadiah::all();     // Ambil semua data hadiah
        return view('pages.pages_home.index', compact('hadiah', 'peserta')); // Kirim data ke view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function simpanUndian(Request $request)
    {
        // Validasi input
        $request->validate([
            'no_undian' => 'required',
        ]);

        $pemenang = new Pemenang();
        $peserta = Peserta::where('no_undian', $request->no_undian)->first();
        $hadiah = HadiahUndian::first(); // Sesuaikan jika ingin hadiah berbeda setiap undian

        if ($peserta && $hadiah) {
            $pemenang->id_peserta = $peserta->id;
            $pemenang->id_hadiah_undian = $hadiah->id;
            $pemenang->save();

            return response()->json(['message' => 'Undian berhasil disimpan']);
        }

        return response()->json(['message' => 'Peserta atau hadiah tidak ditemukan'], 404);
    }
}
