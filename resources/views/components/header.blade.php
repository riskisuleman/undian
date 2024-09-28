<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="index-2.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <span style="font-weight: bold; font-size: 24px; color:#a333ff">Dapoer Dindra</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Undian</a></li>
                <li><a class="nav-link scrollto" href="{{ route('data_peserta.index') }}">Peserta undian</a></li>
                <li><a class="nav-link scrollto" href="{{ route('pemenang_undian.index') }}">Pemenang Undian</a>
                </li>
                <li><a class="nav-link scrollto" href="#">Hadiah Undian</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>

        <a class="btn-getstarted scrollto" href="{{ route('logout') }}" style="background-color:#a333ff; color:white;">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>

    </div>
</header>
