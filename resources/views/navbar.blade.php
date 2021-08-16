<nav class="navbar navbar-expand-lg fixed-top" style="background-color:#3e3e3e; color:white;">
    <div class="container">
        <a class="navbar-brand" href="{{ ('/');}}" style="font-family: 'Spicy Rice', cursive; font-size:39px;">Karya Kencana</a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="p-2 collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Roboto', sans-serif; font-size:18px; color:rgba(51, 50, 49, 1)">
            <ul class="navbar-nav me-auto mb-3 mb-lg-1">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo $active == "home" ? "active" : "" ?>" href="{{ ('/');}}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active == "profil" ? "active" : "" ?>" href="{{ ('/profil');}}">PROFIL</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?php echo $active == "produk" || $active == "jasa" ? "active" : "" ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PRODUK DAN JASA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ ('/produk');}}">Produk</a></li>
                        <li><a class="dropdown-item" href="{{ ('/jasa');}}">Jasa</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active == "portofolio" ? "active" : "" ?>" href="{{ ('/portofolio');}}">PORTOFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active == "kontak" ? "active" : "" ?>" href="{{ ('/contact');}}">KONTAK KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active == "berita" ? "active" : "" ?>" href="{{ ('/berita');}}">BERITA</a>
                </li>
            </ul>
        </div>
    </div>
</nav>