@extends('layouts.master')

@section('title', 'Data Hadiah Undian')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Data Hadiah Undian</h4>
                                <a href="{{ route('hadiah_undian.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data Hadiah
                                </a>
                            </div>
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode Hadiah</th>
                                        <th>Nama Hadiah</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($hadiah as $h)
                                        <tr class="text-center align-middle">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $h->kd_hadiah }}</td>
                                            <td>{{ $h->hadiah->nama_hadiah }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/gambar_hadiah/' . $h->hadiah->gambar_Hadiah) }}"
                                                    width="75px" height="75px" alt="" class="img-thumbnail">
                                            </td>
                                            <td>
                                                <form action="#" method="POST">
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
