@extends('layouts.master')

@section('title', 'Data Pemenang')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-start mb-3">
                            </div>
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Pemenang</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>No Undian</th>
                                        <th>Hadiah</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($pemenang as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->no_hp }}</td>
                                            <td>{{ $p->no_undian }}</td>
                                            <td>{{ $p->hadiah }}</td>

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
