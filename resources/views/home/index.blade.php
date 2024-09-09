@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>Layanan Kirim Paket Luar Negeri <span>JTXpress</span></h2>
        <p>Jasa Pengiriman Luar Negeri Gratis Pick up Area Jakarta Kirim paket Pakaian , Makanan , Kosmetik dan
            komoditas lainya.</p>
        <div class="d-flex">
            <a href="../jtxtrack/index.html" class="btn-get-started scrollto" target="_blank">Lacak Status
                Paket</a>&nbsp;&nbsp;
            <a href="https://api.whatsapp.com/send?phone=+6289652298276&amp;text=Saya%20ingin%20kirim%20paket%20ke%20luar%20negeri."
                target="_blank" class="btn-get-started scrollto"><i class="bi bi-chat"></i> Tanya Ongkir</a>
        </div>
    </div>
</section>
@endsection
