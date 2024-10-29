@extends('layouts.master')

@section('title', 'Undian')

@section('content')
    <style>
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.8);
            z-index: 999;
        }

        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            animation: fadeIn 0.5s ease-in-out;
        }

        .hidden {
            display: none;
        }

        .confetti {
            position: relative;
            width: 100%;
            height: 150px;
            margin-top: 20px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 20px;
            opacity: 0;
            border-radius: 2px;
            animation: fall 3s linear infinite, rotate 1.5s ease-in-out infinite;
        }

        /* Confetti colors */
        .red {
            background-color: red;
        }

        .yellow {
            background-color: yellow;
        }

        .blue {
            background-color: blue;
        }

        .green {
            background-color: green;
        }

        .pink {
            background-color: pink;
        }

        .purple {
            background-color: purple;
        }

        .orange {
            background-color: orange;
        }

        .teal {
            background-color: teal;
        }

        .cyan {
            background-color: cyan;
        }

        .magenta {
            background-color: magenta;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fall {
            0% {
                opacity: 1;
                transform: translateY(0) translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateY(100px) translateX(5px);
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fireworks-left,
        .fireworks-right {
            position: absolute;
            top: 50%;
            width: 200px;
            height: 200px;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fireworks-left {
            left: -150px;
        }

        .fireworks-right {
            right: -150px;
        }

        .explosion-layer {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: burst 1.8s infinite ease-in-out;
        }

        .particle {
            position: absolute;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            opacity: 0;
            animation: particle-burst 1.5s infinite ease-in-out;
        }

        @keyframes burst {
            0% {
                transform: scale(0.5);
                opacity: 1;
            }

            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes particle-burst {
            0% {
                opacity: 1;
                transform: translate(0, 0) scale(1);
            }

            100% {
                opacity: 0;
                transform: translate(calc(70px * var(--x)), calc(70px * var(--y))) scale(0.5);
            }
        }

        .particle:nth-child(1) {
            --x: 1;
            --y: -1;
        }

        .particle:nth-child(2) {
            --x: -1;
            --y: -1;
        }

        .particle:nth-child(3) {
            --x: 1;
            --y: 1;
        }

        .particle:nth-child(4) {
            --x: -1;
            --y: 1;
        }

        .particle:nth-child(5) {
            --x: 0;
            --y: -1;
        }

        .particle:nth-child(6) {
            --x: 0;
            --y: 1;
        }

        .particle:nth-child(7) {
            --x: 1;
            --y: 0;
        }

        .particle:nth-child(8) {
            --x: -1;
            --y: 0;
        }
    </style>
    <section id="hero-static" class="hero-static d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center p-3 text-center position-relative"
            data-aos="zoom-out">
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <!-- Kartu untuk menampilkan satu gambar acak -->
                    <div id="hadiah-card" class="how-it-work-box bg-light p-4 text-center rounded shadow"
                        style="background-size: cover; background-position: center; height: 300px;">
                        <img id="gambar-hadiah"
                            src="{{ asset('uploads/gambar_hadiah/' . $hadiah_undian->first()->gambar_hadiah) }}"
                            alt="Hadiah" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </div>
                    <p id="nama-hadiah">{{ $hadiah_undian->first()->nama_hadiah ?? 'Nama Hadiah' }}</p>
                    <!-- Nama hadiah akan diganti secara dinamis -->
                </div>

                <div class="col-md-4 mt-4 pt-2">
                    <h3 class="mb-4" id="no-undian">00000</h3>
                    <div class="tombol-container">
                        <button id="start-btn" class="btn mb-4"
                            style="background-color: #a333ff; color:white">Start</button>
                        <button id="simpan-btn" class="btn mb-4" style="background-color: #a333ff; color:white"
                            disabled>Simpan</button>
                    </div>
                    <button id="refresh-btn" class="btn" style="background-color: #ff3333; color:white"
                        disabled>Refresh</button>
                </div>

                <div id="winner-popup" class="popup hidden">
                    <div class="popup-content">
                        <h2>Selamat kepada para pemenang!</h2>

                        <div class="fireworks-left">
                            <div class="explosion-layer">
                                <div class="particle red"></div>
                                <div class="particle yellow"></div>
                                <div class="particle blue"></div>
                                <div class="particle green"></div>
                                <div class="particle pink"></div>
                                <div class="particle purple"></div>
                                <div class="particle orange"></div>
                            </div>
                            <div class="explosion-layer">
                                <div class="particle red"></div>
                                <div class="particle yellow"></div>
                                <div class="particle blue"></div>
                                <div class="particle green"></div>
                                <div class="particle pink"></div>
                                <div class="particle purple"></div>
                                <div class="particle orange"></div>
                            </div>
                        </div>

                        <div class="confetti">
                            <div class="confetti-piece red"></div>
                            <div class="confetti-piece yellow"></div>
                            <div class="confetti-piece blue"></div>
                            <div class="confetti-piece green"></div>
                            <div class="confetti-piece pink"></div>
                            <div class="confetti-piece purple"></div>
                            <div class="confetti-piece orange"></div>
                            <div class="confetti-piece teal"></div>
                            <div class="confetti-piece cyan"></div>
                            <div class="confetti-piece magenta"></div>
                        </div>

                        <!-- Fireworks on the right side -->
                        <div class="fireworks-right">
                            <div class="explosion-layer">
                                <div class="particle red"></div>
                                <div class="particle yellow"></div>
                                <div class="particle blue"></div>
                                <div class="particle green"></div>
                                <div class="particle pink"></div>
                                <div class="particle purple"></div>
                                <div class="particle orange"></div>
                            </div>
                            <div class="explosion-layer">
                                <div class="particle red"></div>
                                <div class="particle yellow"></div>
                                <div class="particle blue"></div>
                                <div class="particle green"></div>
                                <div class="particle pink"></div>
                                <div class="particle purple"></div>
                                <div class="particle orange"></div>
                            </div>
                        </div>

                        <button id="close-popup" class="btn" style="background-color:#a333ff; color:white">Tutup</button>
                    </div>
                </div>

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
        let hadiahData = @json($hadiah_undian);
        let undianInterval;
        let hadiahInterval;
        let pesertaTerpilih = [];
        const undianDuration = 10000; 
        const maxPemenang = 3; 

        document.getElementById('start-btn').addEventListener('click', function() {
            if (pesertaTerpilih.length >= maxPemenang) {
                showWinnerPopup();
                return;
            }

            undianInterval = setInterval(pickRandomPeserta, 100);
            hadiahInterval = setInterval(pickRandomHadiah, 100);
            document.getElementById('start-btn').disabled = true;
            document.getElementById('refresh-btn').disabled = true;

            setTimeout(stopUndian, undianDuration);
        });

        function showWinnerPopup() {
            document.getElementById('winner-popup').classList.remove('hidden');
        }

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('winner-popup').classList.add('hidden');
            resetUndian();
        });

        function stopUndian() {
            clearInterval(undianInterval);
            clearInterval(hadiahInterval);
            document.getElementById('simpan-btn').disabled = false;
        }

        document.getElementById('simpan-btn').addEventListener('click', function() {
            const selectedPeserta = document.getElementById('no-undian').innerText;
            const hadiahImageElement = document.getElementById('gambar-hadiah').src;
            const hadiahGambar = hadiahImageElement.split('/').pop();

            pesertaTerpilih.push(selectedPeserta);

            let pesertaTerpilihList = document.getElementById('peserta-terpilih');
            let listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = selectedPeserta;
            pesertaTerpilihList.appendChild(listItem);

            fetch('{{ route('undian.simpan') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        no_undian: selectedPeserta,
                        hadiah_gambar: hadiahGambar,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert('Data Undian berhasil disimpan!');
                    document.getElementById('simpan-btn').disabled = true;
                    document.getElementById('start-btn').disabled = false;
                    document.getElementById('refresh-btn').disabled = false;

                    if (pesertaTerpilih.length >= maxPemenang) {
                        showWinnerPopup();
                        document.getElementById('start-btn').disabled = true;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menyimpan undian!');
                });
        });

        document.getElementById('refresh-btn').addEventListener('click', function() {
            resetUndian();
        });

        function pickRandomPeserta() {
            let peserta;
            do {
                let randomIndex = Math.floor(Math.random() * pesertaData.length);
                peserta = pesertaData[randomIndex];
            } while (pesertaTerpilih.includes(peserta.no_undian)); 

            document.getElementById('no-undian').innerText = peserta.no_undian;
        }

        function pickRandomHadiah() {
            let randomIndex = Math.floor(Math.random() * hadiahData.length);
            let hadiah = hadiahData[randomIndex];
            const gambarUrl = `{{ asset('uploads/gambar_hadiah/') }}/${hadiah.gambar_hadiah}`;
            let hadiahImageElement = document.getElementById('gambar-hadiah');
            hadiahImageElement.src = gambarUrl;
            document.getElementById('nama-hadiah').innerText = hadiah.nama_hadiah;

            hadiahImageElement.onerror = function() {
                hadiahImageElement.src = '/path/to/default/image.png';
                document.getElementById('nama-hadiah').innerText = "Gambar tidak ditemukan";
            };
        }

        function resetUndian() {
            document.getElementById('no-undian').innerText = "00000";
            document.getElementById('start-btn').disabled = false;
            document.getElementById('simpan-btn').disabled = true;
            document.getElementById('refresh-btn').disabled = true;
            pesertaTerpilih = [];
            document.getElementById('peserta-terpilih').innerHTML = "";
        }
    </script>
    <script>
        function showWinnerPopup() {
            document.getElementById('winner-popup').classList.remove('hidden');
        }

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('winner-popup').classList.add('hidden');
            resetUndian();
        });
    </script>

@endsection
