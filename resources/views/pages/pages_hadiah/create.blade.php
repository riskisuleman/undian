@extends('layouts.master')

@section('title', 'Tambah Data Hadiah')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 position-relative" data-aos="zoom-out">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Tambah Data Hadiah</h4>
                            </div>
                            <form action="{{ route('hadiah_undian.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Kode Hadiah dan Nama Hadiah -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="kd_hadiah" class="form-label">Kode Hadiah</label>
                                        <input type="text" class="form-control" id="kd_hadiah" name="kd_hadiah" required
                                            placeholder="Masukkan Kode Hadiah">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama_hadiah" class="form-label">Nama Hadiah</label>
                                        <input type="text" class="form-control" id="nama_hadiah" name="nama_hadiah"
                                            required placeholder="Masukkan Nama Hadiah">
                                    </div>
                                </div>

                                <!-- Total Hadiah dan Gambar Hadiah -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="total_hadiah" class="form-label">Total Hadiah</label>
                                        <input type="text" class="form-control" id="total_hadiah" name="total_hadiah"
                                            required placeholder="Masukkan Total Hadiah">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gambar_hadiah" class="form-label">Gambar Hadiah</label>
                                        <input type="file" class="form-control" id="gambar_hadiah" name="gambar_hadiah"
                                            required>
                                    </div>
                                </div>

                                <!-- Input tambahan untuk undian_id -->
                                <input type="hidden" name="undian_id" value="1">
                                <!-- Ganti 1 dengan ID undian yang valid -->
                                <input type="hidden" name="peringkat_id" class="form-control">


                                <!-- Tombol -->
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('hadiah_undian.index') }}" class="btn btn-primary me-1">Kembali</a>
                                    <button type="submit" class="btn btn-danger">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
