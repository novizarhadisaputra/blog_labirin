<div class="offcanvas offcanvas-start border-0" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <h1></h1>
        <button type="button" class="icon-button" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="bi bi-x"></i></button>
    </div>
    <div class="offcanvas-body h-100">
        <div class="d-flex justify-content-center">
            <a href="index.html"><img src="assets/img/labirin.svg" alt="" height="20"></a>
        </div>
        <nav class="nav flex-column p-4 side-menu">
            <ul class="list-unstyled mb-0 py-3 pt-md-1">
                @foreach ($categories as $category)
                    <li class="mb-1">
                        <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                            data-bs-target="#{{ $category->Kriteria }}-collapse" aria-expanded="false">
                            {{ $category->Kriteria }}
                        </button>
                        <div class="collapse" id="{{ $category->Kriteria }}-collapse">
                            <ul class="list-unstyled ps-3">
                                @foreach ($category->tags as $tag)
                                    <li class="p-2">
                                        <a class="my-2 py-1 px-3"
                                            href="{{ route('tag.show', ['tag' => $tag->ref]) }}">{{ $tag->tag }}</a>
                                    </li>
                                @endforeach

                                {{-- <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Ekonomi Digital</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Kumpulan Ekonomi</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Perdagangan</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Investasi</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Industri</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Perbankan</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Ekonomi Internasional</a>
                            </li> --}}
                            </ul>
                        </div>
                    </li>
                @endforeach

                <li class="mb-1">
                    <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                        data-bs-target="#sosial-collapse" aria-expanded="false">
                        Sosial
                    </button>
                    <div class="collapse" id="sosial-collapse">
                        <ul class="list-unstyled ps-3">
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Pendidikan</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Sosial Kemasyarakatan</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Hukum</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                        data-bs-target="#sda-collapse" aria-expanded="false">
                        Sumber daya alam
                    </button>
                    <div class="collapse" id="sda-collapse">
                        <ul class="list-unstyled ps-3">
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">SDA Non Migas</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Lingkungan Hidup</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Energi</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Pangan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                        data-bs-target="#birokrasi-collapse" aria-expanded="false">
                        Birokrasi
                    </button>
                    <div class="collapse" id="birokrasi-collapse">
                        <ul class="list-unstyled ps-3">
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Perpajakan</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Pemerintahan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                        data-bs-target="#infrastruktur-collapse" aria-expanded="false">
                        Infrastruktur
                    </button>
                    <div class="collapse" id="infrastruktur-collapse">
                        <ul class="list-unstyled ps-3">
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Transportasi</a>
                            </li>
                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Sarana Publik</a>
                            </li>

                            <li class="p-2">
                                <a class="my-2 py-1 px-3" href="kategori result.html">Pembangunan Pabrik</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="text-center mt-auto">
            <h5>Ikuti kami :</h5>
            <ul class="list-unstyled list-inline mt-3">
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-telegram"></i></a></li>
                <li class="list-inline-item h1"><a href="#"><i class="bi bi-envelope"></i></a></li>
            </ul>
        </div>
    </div>
</div>
