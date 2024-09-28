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
                                <div class="mb-3">
                                    <label for="kd_hadiah" class="form-label">Kode Hadiah</label>
                                    <input type="text" class="form-control" id="kd_hadiah" name="kd_hadiah" required
                                        placeholder="Masukkan Kode Hadiah">
                                </div>
                                <div class="mb-3">
                                    <label for="hadiah_id" class="form-label">Nama Hadiah</label>
                                    <input type="text" class="form-control" id="hadiah_id" name="hadiah_id" required
                                        placeholder="Masukkan Nama Hadiah">
                                </div>
                                <div class="mb-3">
                                    <label for="gahadiah_id" class="form-label">Gambar Hadiah</label>
                                    <input type="file" class="form-control" id="gahadiah_id" name="gahadiah_id"
                                        required placeholder="Masukkan Gambar Hadiah">
                                </div>
                                <!-- Input hidden untuk url_hadiah -->
                                <input type="hidden" name="url_hadiah" value="URL_HADIAH_YANG_DITENTUKAN">
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
