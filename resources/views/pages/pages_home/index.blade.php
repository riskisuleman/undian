@extends('layouts.master')

@section('title', 'Undian')

@section('content')
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <!-- Single card to display one random image -->
                    <div id="hadiah-card" class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-size: cover; background-position: center; height: 300px;">
                        <img id="gambar-hadiah" src="{{ asset('uploads/gambar_hadiah/' . $hadiah->first()->gambar_hadiah) }}"
                            alt="Hadiah" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </div>
                    <p id="nama-hadiah">Nama Hadiah</p> <!-- Nama hadiah akan diganti secara dinamis -->
                </div>

                <!-- No Undian dan Tombol (tengah) -->
                <div class="col-md-4 mt-4 pt-2">
                    <h3 class="mb-4" id="no-undian">00000</h3>
                    <div class="tombol-container">
                        <button id="start-btn" class="btn mb-4"
                            style="background-color: #a333ff; color:white">Start</button>
                        <button id="stop-btn" class="btn mb-4" style="background-color: #a333ff; color:white" disabled>Stop
                        </button>
                        <button id="simpan-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                            disabled>Simpan
                        </button>
                    </div>
                    <button id="refresh-btn" class="btn" style="background-color: #ff3333; color:white"
                        disabled>Refresh</button>
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
        let hadiahData = @json($hadiah);
        let undianInterval;
        let hadiahInterval;
        let pesertaTerpilih = [];

        // Tombol Start
        document.getElementById('start-btn').addEventListener('click', function() {
            undianInterval = setInterval(pickRandomPeserta, 100);
            hadiahInterval = setInterval(pickRandomHadiah, 100);
            document.getElementById('start-btn').disabled = true;
            document.getElementById('stop-btn').disabled = false;
            document.getElementById('refresh-btn').disabled = true;
        });

        // Tombol Stop
        document.getElementById('stop-btn').addEventListener('click', function() {
            clearInterval(undianInterval);
            clearInterval(hadiahInterval);
            document.getElementById('stop-btn').disabled = true;
            document.getElementById('simpan-btn').disabled = false;
        });

        // Tombol Simpan
        document.getElementById('simpan-btn').addEventListener('click', function() {
            const selectedPeserta = document.getElementById('no-undian').innerText;
            const hadiahImageElement = document.getElementById('gambar-hadiah')
                .src; // Ubah untuk mengambil src dari elemen img
            const hadiahGambar = hadiahImageElement.split('/').pop(); // Ambil nama file gambar dari src

            pesertaTerpilih.push(selectedPeserta);

            // Update tampilan peserta terpilih
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
                        hadiah_gambar: hadiahGambar, // Kirim gambar hadiah yang dipilih
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert('Undian berhasil disimpan!');
                    document.getElementById('simpan-btn').disabled = true;
                    document.getElementById('start-btn').disabled = false; // Reset setelah simpan
                    document.getElementById('refresh-btn').disabled = false; // Aktifkan tombol refresh
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menyimpan undian!');
                });
        });

        // Tombol Refresh
        document.getElementById('refresh-btn').addEventListener('click', function() {
            resetUndian();
        });

        // Pilih Peserta Acak
        function pickRandomPeserta() {
            let randomIndex = Math.floor(Math.random() * pesertaData.length);
            let peserta = pesertaData[randomIndex];
            document.getElementById('no-undian').innerText = peserta.no_undian;
        }

        // Pilih Hadiah Acak
        function pickRandomHadiah() {
            let randomIndex = Math.floor(Math.random() * hadiahData.length);
            let hadiah = hadiahData[randomIndex];

            // Debugging untuk melihat path gambar
            console.log(`Path gambar: /uploads/gambar_hadiah/${hadiah.gambar_hadiah}`);

            // Mengubah src dari img tag
            let hadiahImageElement = document.getElementById('gambar-hadiah');
            hadiahImageElement.src = `/uploads/gambar_hadiah/${hadiah.gambar_hadiah}`;
            document.getElementById('nama-hadiah').innerText = hadiah.nama_hadiah;

            // Debugging untuk memastikan elemen gambar sudah diubah
            hadiahImageElement.onerror = function() {
                console.error(`Gambar tidak ditemukan: /uploads/gambar_hadiah/${hadiah.gambar_hadiah}`);
            };
        }

        // Fungsi Reset
        function resetUndian() {
            document.getElementById('no-undian').innerText = "00000"; // Reset nomor undian
            document.getElementById('start-btn').disabled = false; // Aktifkan kembali tombol start
            document.getElementById('stop-btn').disabled = true; // Nonaktifkan tombol stop
            document.getElementById('simpan-btn').disabled = true; // Nonaktifkan tombol simpan
            document.getElementById('refresh-btn').disabled = true; // Nonaktifkan tombol refresh
            pesertaTerpilih = []; // Kosongkan peserta terpilih
            document.getElementById('peserta-terpilih').innerHTML = ""; // Kosongkan tampilan peserta terpilih
        }
    </script>
@endsection
