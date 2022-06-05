<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder" href="#">Tropisianimal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                    <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">TENTANG</a>
                </li>
                <li class="nav-item mx-sm-4 mx-md-2 mx-lg-4">
                    <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="/berita">BERITA</a>
                </li>
                <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                    <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">GALERI</a>
                </li>
                <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                    <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">KONTAK</a>
                </li>
                <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                    <a class="nav-link {{ Request::is('login', 'register') ? 'active' : '' }}" href="/login">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>