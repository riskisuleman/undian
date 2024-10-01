@extends('layouts.master')

@section('title', 'Undian')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <!-- Gambar Hadiah (sebelah kiri) -->
                <div class="col-md-4 mt-4 pt-2">
                    <div id="hadiah-image" class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-image: url('{{ asset('uploads/gambar_hadiah/' . $hadiah[0]->gambar) }}'); background-size: cover; background-position: center; height: 300px;">
                    </div>
                </div>

                <!-- No Undian dan Tombol (tengah) -->
                <div class="col-md-4 mt-4 pt-2">
                    <h3 class="mb-4" id="no-undian">00000</h3>
                    <div class="tombol-container">
                        <button id="start-btn" class="btn mb-4"
                            style="background-color: #a333ff; color:white">Start</button>
                        <button id="stop-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                            disabled>Stop</button>
                    </div>
                    <button id="simpan-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                        disabled>Simpan</button>
                </div>

                <!-- List Peserta Terpilih (sebelah kanan) -->
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="height: 300px; overflow-y: auto;">
                        <h5>Peserta Terpilih</h5>
                        <ul id="peserta-terpilih" class="list-group">
                            <!-- List peserta terpilih akan ditambahkan di sini -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let pesertaData = @json($peserta);
        let undianInterval;
        let pesertaTerpilih = [];

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
            pesertaTerpilih.push(selectedPeserta);

            let pesertaTerpilihList = document.getElementById('peserta-terpilih');
            let listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = selectedPeserta;
            pesertaTerpilihList.appendChild(listItem);

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
    </script>
    <script>
        function pickRandomPeserta() {
            let randomIndex = Math.floor(Math.random() * pesertaData.length);
            let peserta = pesertaData[randomIndex];

            document.getElementById('no-undian').innerText = peserta.no_undian;
        }

        let hadiahData = @json($hadiah);
        let hadiahInterval;

        document.getElementById('start-btn').addEventListener('click', function() {
            hadiahInterval = setInterval(pickRandomHadiah, 100);
            undianInterval = setInterval(pickRandomPeserta, 100);
            document.getElementById('start-btn').disabled = true;
            document.getElementById('stop-btn').disabled = false;
        });

        document.getElementById('stop-btn').addEventListener('click', function() {
            clearInterval(hadiahInterval);
            clearInterval(undianInterval);
            document.getElementById('stop-btn').disabled = true;
            document.getElementById('simpan-btn').disabled = false;
        });

        function pickRandomHadiah() {
            let randomIndex = Math.floor(Math.random() * hadiahData.length);
            let hadiah = hadiahData[randomIndex];

            // Mengganti background-image dari elemen <div>
            let hadiahImageElement = document.getElementById('hadiah-image');
            hadiahImageElement.style.backgroundImage = `url('/uploads/gambar_hadiah/${hadiah.gambar_hadiah}')`;
            hadiahImageElement.style.backgroundSize = 'cover';
            hadiahImageElement.style.backgroundPosition = 'center';
        }
    </script>
@endsection
