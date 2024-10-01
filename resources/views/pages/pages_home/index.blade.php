@extends('layouts.master')

@section('title', 'Undian')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <!-- Gambar Hadiah -->
                <div class="col-md-4 mt-4 pt-2">
                    <div id="hadiah-image" class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-size: cover; background-position: center; height: 300px;">
                    </div>
                </div>

                <!-- No Undian dan Tombol -->
                <div class="col-md-4 mt-4 pt-2">
                    <h3 class="mb-4" id="no-undian">00000</h3>
                    <div class="tombol-container">
                        <button id="start-btn" class="btn mb-4"
                            style="background-color: #a333ff; color:white">Start</button>
                        <button id="stop-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                            disabled>Stop</button>
                    </div>

                    <button id="nama-peserta" class="btn mb-4" style="background-color: #a333ff; color:white">Nama
                        Peserta</button><br>
                    <button id="simpan-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                        disabled>Simpan</button>
                </div>

                <!-- Gambar Hadiah (kanan) -->
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-image: url('{{ asset('uploads/gambar_hadiah/sneck_kentang.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let pesertaData = @json($peserta); // Data peserta dari controller
        let undianInterval;

        document.getElementById('start-btn').addEventListener('click', function() {
            undianInterval = setInterval(pickRandomPeserta, 100);
            document.getElementById('start-btn').disabled = true;
            document.getElementById('stop-btn').disabled = false;
        });

        document.getElementById('stop-btn').addEventListener('click', function() {
            clearInterval(undianInterval);
            document.getElementById('stop-btn').disabled = true;
            document.getElementById('simpan-btn').disabled = false;
        });

        document.getElementById('simpan-btn').addEventListener('click', function() {
            const selectedPeserta = document.getElementById('no-undian').innerText;
            // Simpan ke database dengan AJAX
            fetch('{{ route('undian.simpan') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        no_undian: selectedPeserta,
                    })
                }).then(response => response.json())
                .then(data => {
                    alert('Undian berhasil disimpan!');
                });
        });

        function pickRandomPeserta() {
            let randomIndex = Math.floor(Math.random() * pesertaData.length);
            let peserta = pesertaData[randomIndex];

            document.getElementById('no-undian').innerText = peserta.no_undian;
            document.getElementById('nama-peserta').innerText = peserta.nama;
        }
    </script>
@endsection
