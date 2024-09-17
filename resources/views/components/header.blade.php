<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="index-2.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <span style="font-weight: bold; font-size: 24px; color:rgb(16, 141, 204)">Dapoer Dindra</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Dashboard</a></li>
                <li><a class="nav-link scrollto" href="index-2.html">Data Peserta</a></li>
                <li><a class="nav-link scrollto" href="index-3.html#about">Undian</a></li>
                <li><a class="nav-link scrollto" href="#">Pemenang Undian</a></li>
                <li><a class="nav-link scrollto" href="index-3.html#contact">Hadiah Undian</a></li>
                <li><a class="nav-link scrollto" href="index-3.html#contact">Pengaturan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>

        <a class="btn-getstarted scrollto" href="{{ route('logout') }}" style="background-color:rgb(16, 141, 204)">Logout</a>
    </div>
</header>
