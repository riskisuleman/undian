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
                            <div class="d-flex justify-content-start mb-3">
                                <a href="{{ route('data_peserta.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data Peserta
                                </a>
                            </div>
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>No Undian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="text-center">
                                        @foreach ($peserta as $p)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->undian->users->nama }}</td>
                                            <td>{{ $p->undian->users->alamat }}</td>
                                            <td>{{ $p->undian->users->no_hp }}</td>
                                            <td>{{ $p->no_undian }}</td>
                                        @endforeach
                                        <td>
                                            <form action="#">
                                                <a href="" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
