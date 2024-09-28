@extends('layouts.master')

@section('title', 'Data Peserta')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Data Peserta</h4>
                                <a href="{{ route('data_peserta.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data Peserta
                                </a>
                            </div>
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode Peserta</th>
                                        <th>Nama Peserta</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>No Undian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($peserta as $p)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->kd_peserta }}</td>
                                            <td>{{ $p->undian->user->nama }}</td>
                                            <td>{{ $p->undian->user->alamat }}</td>
                                            <td>{{ $p->undian->user->no_hp }}</td>
                                            <td>{{ $p->no_undian }}</td>
                                            <td>
                                                <form action="{{ route('data_peserta.destroy', $p->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('data_peserta.edit', $p->id) }}" class="btn btn-sm btn-primary">
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
