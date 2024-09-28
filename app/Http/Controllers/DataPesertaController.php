<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Undian;
use App\Models\User;

class DataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $peserta = Peserta::all();
        return view('pages.pages_peserta.index', compact('user', 'peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pages_peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_peserta' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'no_undian' => 'required',
        ]);

        $user = User::firstOrCreate(
            [
                'nama' => $request->nama
            ],
            [
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'username' => strtolower(str_replace(' ', '', $request->nama)),
                'password' => bcrypt('defaultpassword'),
            ]
        );

        $undian = Undian::create([
            'user_id' => $user->id,
            'tmt_undian' => now(),
            'tst_undian' => null,
        ]);

        Peserta::create([
            'undian_id' => $undian->id,
            'kd_peserta' => $request->kd_peserta,
            'no_undian' => $request->no_undian,
            'tanggal' => now(),
        ]);

        return redirect()->route('data_peserta.index')->with('success', 'Data peserta berhasil disimpan!');
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
    public function edit(Peserta $data_pesertum)
    {
        $user = User::all();
        return view('pages.pages_peserta.edit', compact('data_pesertum', 'user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kd_peserta' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'no_undian' => 'required',
        ]);

        $peserta = Peserta::with('undian.user')->findOrFail($id);

        $peserta->undian->user->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => strtolower(str_replace(' ', '', $request->nama)), 
        ]);

        $peserta->update([
            'kd_peserta' => $request->kd_peserta,
            'no_undian' => $request->no_undian,
            'tanggal' => now(), 
        ]);

        return redirect()->route('data_peserta.index')->with('success', 'Data peserta berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $data_pesertum)
    {
        $data_pesertum->delete();
        return redirect()->route('data_peserta.index')->with('success', 'Data peserta berhasil dihapus!');
    }
}
