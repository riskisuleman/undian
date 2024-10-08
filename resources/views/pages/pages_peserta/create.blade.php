@extends('layouts.master')

@section('title', 'Tambah Data Peserta')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 position-relative" data-aos="zoom-out">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Tambah Data Peserta</h4>
                            </div>
                            <form action="{{ route('data_peserta.store') }}" method="POST">
                                @csrf
                                <div class="d-flex">
                                    <div class="mb-3 me-3" style="flex: 1;">
                                        <label for="kd_peserta" class="form-label">Kode Peserta</label>
                                        <input type="text" class="form-control" id="kd_peserta" name="kd_peserta"
                                            required placeholder="Masukkan Kode Peserta">
                                    </div>
                                    <div class="mb-3 me-3" style="flex: 1;">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required
                                            placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mb-3 me-3" style="flex: 1;">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required
                                            placeholder="Masukkan Alamat">
                                    </div>
                                    <div class="mb-3 me-3" style="flex: 1;">
                                        <label for="no_hp" class="form-label">No Handphone</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" required
                                            placeholder="Masukkan No Handphone">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mb-3 me-3" style="flex: 1;">
                                        <label for="no_undian" class="form-label">No Undian</label>
                                        <input type="text" class="form-control" id="no_undian" name="no_undian" required
                                            placeholder="Masukkan No Undian">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('data_peserta.index') }}" class="btn btn-primary me-1">Kembali</a>
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
