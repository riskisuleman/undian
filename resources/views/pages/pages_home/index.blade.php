@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-image: url('{{ asset('assets/img/sneck_kentang.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
                    </div>
                </div>

                <div class="col-md-4 mt-4 pt-2">
                    <h3 class="mb-4">00212</h3>
                    <button class="btn btn-primary mb-4">Mulai Acak</button><br>
                    <button class="btn btn-primary mb-4">Berhenti</button><br>
                    <button class="btn btn-primary mb-4">Nama Peserta</button><br>
                    <button class="btn btn-primary mb-4">Simpan</button>
                </div>

                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-image: url('{{ asset('assets/img/sneck_kentang.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
