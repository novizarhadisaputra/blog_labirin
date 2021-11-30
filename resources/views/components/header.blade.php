<header>
    <nav class="navbar navbar-expand-md bg-transparent border-0 navbar-light">
        <div class="container">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <button class="icon-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                    aria-controls="offcanvasMenu"><i class="bi bi-list"></i></button>
                <a href="index.html"><img src="assets/img/labirin.svg" alt="" height="20"></a>
                <button class="icon-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                    aria-controls="offcanvasSearch"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </nav>
    <div class="nav-scroller py-1 bg-secondary">
        <div class="container">
            <nav class="nav d-flex justify-content-md-center">
                <a class="my-2 py-1 px-3" href="{{ route('root') }}"><i class="bi bi-house-fill"></i> Beranda</a>
                <a class="my-2 py-1 px-3" href="{{ route('kategori.index') }}">Kategori</a>
                <a class="my-2 py-1 px-3" href="{{ route('fokus.index') }}">Fokus</a>
                <a class="my-2 py-1 px-3" href="{{ route('timeline') }}">Timeline</a>
                <a class="my-2 py-1 px-3" href="{{ route('about') }}">Tentang Kami</a>
            </nav>
        </div>
    </div>
</header>
