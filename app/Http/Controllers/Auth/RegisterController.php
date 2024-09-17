<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.auth.register');
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
        // Validasi input pengguna
        $request->validate([
            'username' => '',
            // 'level' => '',
            'nama_lengkap' => '',
            'alamat' => '',
            'no_hp' => '',
            'no_registrasi' => '',
            'password' => '',
        ]);

        $user = User::create([
            'username' => $request->username,
            // 'level' => $request->level,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'no_registrasi' => $request->no_registrasi,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
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
}
