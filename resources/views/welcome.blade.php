@extends('layouts.frontend')
@section('content')
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme mb-4" id="top1-slider">
                        @foreach ($economies as $economy)
                            <div class="item">
                                <div class="post-slider">
                                    <div class="position-relative img-hover-zoom ">
                                        <a href="{{ route('news.show', ['news' => $economy->ref]) }}" target="_blank">
                                            <img src="{{ $economy->image ? env('APP_IMAGE_URL') . $economy->image . '.' . $economy->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $economy->Headline }}">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="post-detail">
                                        <div class="mb-2">
                                            <a
                                                href="{{ route('kategori.show', ['kategori' => $economy->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="badge badge-primary p-1"><i class="bi bi-folder mx-1"
                                                        aria-hidden="true"></i>
                                                    {{ ucfirst($economy->tags[0]->criteria()->first()->Kriteria) }}</span>
                                            </a>
                                            <span class="small text-white">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                {{ date('d M Y', strtotime($economy->Tanggal)) }}
                                            </span>
                                        </div>
                                        <a href="{{ route('news.show', ['news' => $economy->ref]) }}">
                                            <h2 class="text-white post-title">{{ $economy->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="item">
                            <div class="post-slider">
                                <div class="position-relative img-hover-zoom ">
                                    <a href="detail.html" target="_blank">
                                        <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <div class="mb-2">
                                        <a href="kategori result.html">
                                            <span class="badge badge-primary p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i> Ekonomi</span>
                                        </a>
                                        <span class="small text-white">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                    <a href="detail.html">
                                        <h2 class="text-white post-title">Mengapa Negara Maju Gemar Punya Utang
                                            Banyak?</h2>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme mb-4" id="top2-slider">
                        @foreach ($socials as $social)
                            <div class="item">
                                <div class="post-slider">
                                    <div class="position-relative img-hover-zoom ">
                                        <a href="{{ route('news.show', ['news' => $social->ref]) }}" target="_blank">
                                            <img src="{{ $social->image ? env('APP_IMAGE_URL') . $social->image . '.' . $social->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $social->Headline }}">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="post-detail">
                                        <div class="mb-2">
                                            <a
                                                href="{{ route('kategori.show', ['kategori' => $social->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                        aria-hidden="true"></i>
                                                    {{ ucfirst($social->tags[0]->criteria()->first()->Kriteria) }}</span>
                                            </a>
                                            <span class="small text-white">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($social->Tanggal)) }}
                                            </span>
                                        </div>
                                        <a href="{{ route('news.show', ['news' => $social->ref]) }}">
                                            <h2 class="text-white post-title">{{ $social->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="item">
                            <div class="post-slider">
                                <div class="position-relative img-hover-zoom ">
                                    <a href="detail.html" target="_blank">
                                        <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <div class="mb-2">
                                        <a href="kategori result.html">
                                            <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i> Sosial</span>
                                        </a>
                                        <span class="small text-white">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                    <a href="detail.html">
                                        <h2 class="text-white post-title">Tilang Dianulir, SIM Pengendara Bawa
                                            Sepeda di Mobil Dikembalikan</h2>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="owl-carousel owl-theme mb-4" id="top3-slider">
                        @foreach ($birokrasi as $biro)
                            <div class="item">
                                <div class="post-slider">
                                    <div class="position-relative img-hover-zoom ">
                                        <a href="{{ route('news.show', ['news' => $biro->ref]) }}" target="_blank">
                                            <img src="{{ $biro->image ? env('APP_IMAGE_URL') . $biro->image . '.' . $biro->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $biro->Headline }}">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="post-detail">
                                        <div class="mb-2">
                                            <a
                                                href="{{ route('kategori.show', ['kategori' => $biro->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                        aria-hidden="true"></i>
                                                    {{ ucfirst($biro->tags[0]->criteria()->first()->Kriteria) }}</span>
                                            </a>
                                            <span class="small text-white">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                {{ date('d M Y', strtotime($biro->Tanggal)) }}
                                            </span>
                                        </div>
                                        <a href="{{ route('news.show', ['news' => $biro->ref]) }}">
                                            <h2 class="text-white post-title">{{ $biro->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="post-slider">
                                <div class="position-relative img-hover-zoom ">
                                    <a href="detail.html" target="_blank">
                                        <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <div class="mb-2">
                                        <a href="kategori result.html">
                                            <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i> Birokrasi</span>
                                        </a>
                                        <span class="small text-white">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                    <a href="detail.html">
                                        <h2 class="text-white post-title">Kekuasaan Membentuk Undang-undang & Teori
                                            Pembagian Wewenang John Locke</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-slider">
                                <div class="position-relative img-hover-zoom ">
                                    <a href="detail.html" target="_blank">
                                        <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <div class="mb-2">
                                        <a href="kategori result.html">
                                            <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i> Birokrasi</span>
                                        </a>
                                        <span class="small text-white">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                    <a href="detail.html">
                                        <h2 class="text-white post-title">Kekuasaan Kehakiman dan Lembaga Yudikatif
                                            dalam UUD 1945</h2>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="section-title">Berita Utama</h2>
                        </div>
                        {{-- <a href="kategori result.html">Selengkapnya<i class="bi bi-arrow-right ms-2"
                                aria-hidden="true"></i></a> --}}
                    </div>
                    <div class="row">
                        @foreach ($hotNews as $hot)
                            <div class="col-md-6">
                                <div class="card border-0 mb-4">
                                    <div class="img-hover-zoom">
                                        {{-- <a class="post-badge"
                                            href="{{ route('kategori.show', ['kategori' => $hot->news->tags[0]->criteria->ref]) }}">
                                            <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i>
                                                {{ $hot->news->tags[0]->criteria->Kriteria }}</span>
                                        </a> --}}
                                        <a href="{{ route('news.show', ['news' => $hot->news->ref]) }}"><img
                                                class="img-fluid"
                                                src="{{ $hot->news->image ? env('APP_IMAGE_URL') . $hot->news->image . '.' . $hot->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $hot->news->Headline }}"></a>
                                    </div>
                                    <div class="card-body py-2 px-0">
                                        <a href="{{ route('news.show', ['news' => $hot->news->ref]) }}">
                                            <h3 class="h4 post-title">{{ $hot->news->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <a
                                                href="{{ route('kategori.show', ['kategori' => $hot->news->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="small text-primary">
                                                    <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                    {{ $hot->news->UserUpdate }}
                                                </span>
                                            </a>
                                            <span class="small">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                {{ date('d M Y', strtotime($hot->news->Tanggal)) }}
                                            </span>
                                            <span class="small ms-1">
                                                {{ ucwords($hot->news->media) }}
                                            </span>
                                        </div>
                                        <div class="post-descmin">
                                            {!! $hot->news->Rangkuman !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="section-title">Ekonomi Terhangat</h2>
                        </div>
                        <a href="{{ route('news.index') }}">Selengkapnya<i class="bi bi-arrow-right ms-2"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="row">
                        @php $k = 0; @endphp
                        @foreach ($economiesHot as $eh)
                            @if ($k < 2)
                                <div class="col-md-6">
                                    <div class="card border-0 mb-4">
                                        <div class="img-hover-zoom">
                                            <a class="post-badge"
                                                href="{{ route('kategori.show', ['kategori' => $eh->news->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                        aria-hidden="true"></i>
                                                    {{ ucwords($eh->news->tags[0]->criteria()->first()->Kriteria) }}</span>
                                            </a>
                                            <a href="{{ route('news.show', ['news' => $eh->news->ref]) }}"><img
                                                    class="img-fluid"
                                                    src="{{ $eh->news->image ? env('APP_IMAGE_URL') . $eh->news->image . '.' . $eh->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                    alt="{{ $eh->news->Headline }}"></a>
                                        </div>
                                        <div class="card-body py-2 px-0">
                                            <a href="{{ route('news.show', ['news' => $eh->news->ref]) }}">
                                                <h3 class="h4 post-title">{{ $eh->news->Headline }}</h3>
                                            </a>
                                            <div class="mb-2">
                                                <a
                                                    href="{{ route('kategori.show', ['kategori' => $eh->news->tags[0]->criteria()->first()->ref]) }}">
                                                    <span class="small text-primary">
                                                        <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                        {{ $eh->news->UserUpdate }}
                                                    </span>
                                                </a>
                                                <span class="small">
                                                    <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                    {{ date('d M Y', strtotime($eh->news->Tanggal)) }}
                                                </span>
                                            </div>
                                            <div class="post-descmin">
                                                {!! $eh->news->Rangkuman !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="col-md-6">
                            <div class="card border-0 mb-4">
                                <div class="img-hover-zoom">
                                    <a class="post-badge" href="kategori result.html">
                                        <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                aria-hidden="true"></i> Birokrasi</span>
                                    </a>
                                    <a href="detail.html"><img class="img-fluid"
                                            src="{{ asset('assets/img/no-image.png') }}" alt="..."></a>
                                </div>
                                <div class="card-body py-2 px-0">
                                    <a href="detail.html">
                                        <h3 class="h4 post-title">Luncurkan E- Meterai Rp 10.000, Sri Mulyani: Ini
                                            Sama walau Bentuknya Elektronik</h3>
                                    </a>
                                    <div class="mb-2">
                                        <a href="kategori result.html">
                                            <span class="small text-primary">
                                                <i class="bi bi-person-square mx-1" aria-hidden="true"></i> Bambang
                                                Pamungkas
                                            </span>
                                        </a>
                                        <span class="small">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                    <p class="post-descmin">
                                        Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai elektronik
                                        (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021). Bendahara negara
                                        ini menuturkan, pengadaan meterai elektronik merespons perkembangan dokumen
                                        bermuatan transaksi material secara elektronik yang belakangan makin marak
                                        beredar.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                        @php $k++; @endphp

                    </div>

                    <div class="mb-4">
                        @php $k = 0; @endphp
                        @foreach ($economiesHot as $eh)
                            @if ($k > 1)
                                <div class="d-md-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                        <a class="post-badge"
                                            href="{{ route('kategori.show', ['kategori' => $eh->news->tags[0]->criteria()->first()->ref]) }}">
                                            <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i>
                                                {{ ucfirst($eh->news->tags[0]->criteria()->first()->Kriteria) }}</span>
                                        </a>
                                        <a href="{{ route('news.show', ['news' => $eh->news->ref]) }}">
                                            <img src="{{ $eh->news->image ? env('APP_IMAGE_URL') . $eh->news->image . '.' . $eh->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $eh->news->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['news' => $eh->news->ref]) }}">
                                            <h2 class="post-title">{{ $eh->news->Headline }}
                                            </h2>
                                        </a>
                                        <div class="mb-2">
                                            <a
                                                href="{{ route('kategori.show', ['kategori' => $eh->news->tags[0]->criteria()->first()->ref]) }}">
                                                <span class="small text-primary">
                                                    <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                    {{ $eh->news->UserUpdate }}
                                                </span>
                                            </a>
                                            <span class="small">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                {{ date('d M Y', strtotime($eh->news->Tanggal)) }}
                                            </span>
                                            <span class="small ms-1">
                                                {{ ucwords($eh->news->media) }}
                                            </span>
                                        </div>
                                        <div class="post-descmin">
                                            {!! $eh->news->Rangkuman !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @php $k++; @endphp
                        @endforeach

                        {{-- <div class="d-md-flex mb-4">
                            <div class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                <a class="post-badge" href="kategori result.html">
                                    <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                            aria-hidden="true"></i> Sosial</span>
                                </a>
                                <a href="detail.html">
                                    <img src="{{ asset('assets/img/no-image.png') }}" alt="{{$eh->news->Headline}}">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="detail.html">
                                    <h2 class="post-title">Uang Bisa Hilang Seketika, Ini Modus Investasi
                                        Bodong
                                        Berkedok Robot Trading</h2>
                                </a>
                                <div class="mb-2">
                                    <a href="kategori result.html">
                                        <span class="small text-primary">
                                            <i class="bi bi-person-square mx-1" aria-hidden="true"></i> Bambang
                                            Pamungkas
                                        </span>
                                    </a>
                                    <span class="small">
                                        <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 | 08:00
                                        WIB
                                    </span>
                                </div>
                                <p class="post-descmin">
                                    Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai elektronik
                                    (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021). Bendahara negara ini
                                    menuturkan, pengadaan meterai elektronik merespons perkembangan dokumen
                                    bermuatan transaksi material secara elektronik yang belakangan makin marak
                                    beredar.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex mb-4">
                            <div class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                <a class="post-badge" href="kategori result.html">
                                    <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                            aria-hidden="true"></i> Sosial</span>
                                </a>
                                <a href="detail.html">
                                    <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="detail.html">
                                    <h2 class="post-title">Disebut BUMN "Hantu" dan Mau Dibubarkan, Karyawan
                                        Istaka
                                        Karya Protes</h2>
                                </a>
                                <div class="mb-2">
                                    <a href="kategori result.html">
                                        <span class="small text-primary">
                                            <i class="bi bi-person-square mx-1" aria-hidden="true"></i> Bambang
                                            Pamungkas
                                        </span>
                                    </a>
                                    <span class="small">
                                        <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 | 08:00
                                        WIB
                                    </span>
                                </div>
                                <p class="post-descmin">
                                    Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai elektronik
                                    (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021). Bendahara negara ini
                                    menuturkan, pengadaan meterai elektronik merespons perkembangan dokumen
                                    bermuatan transaksi material secara elektronik yang belakangan makin marak
                                    beredar.
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex mb-4">
                            <div class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                <a class="post-badge" href="kategori result.html">
                                    <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                            aria-hidden="true"></i> Sosial</span>
                                </a>
                                <a href="detail.html">
                                    <img src="{{ asset('assets/img/no-image.png') }}" alt="...">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="detail.html">
                                    <h2 class="post-title">MK Tolak Gugatan Serikat Buruh Pertamina soal
                                        Privatisasi
                                        BUMN</h2>
                                </a>
                                <div class="mb-2">
                                    <a href="kategori result.html">
                                        <span class="small text-primary">
                                            <i class="bi bi-person-square mx-1" aria-hidden="true"></i> Bambang
                                            Pamungkas
                                        </span>
                                    </a>
                                    <span class="small">
                                        <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i> 2 Okt 2021 | 08:00
                                        WIB
                                    </span>
                                </div>
                                <p class="post-descmin">
                                    Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai elektronik
                                    (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021). Bendahara negara ini
                                    menuturkan, pengadaan meterai elektronik merespons perkembangan dokumen
                                    bermuatan transaksi material secara elektronik yang belakangan makin marak
                                    beredar.
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="alert alert-primary border-0 rounded-md">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{ route('fokus.index') }}" class="text-primary h2"><i
                                        class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>

                        <div class="owl-carousel owl-theme" id="fokus-slider">
                            <div class="item">
                                <ul class="list-group list-group-flush">
                                    @php $i = 0; @endphp
                                    @foreach ($focus as $focs)
                                        <li class="list-group-item bg-transparent p-0 pt-2">
                                            <div class="card bg-transparent border-0 mb-1">
                                                <div class="img-hover-zoom">
                                                    @if ($i == 0)
                                                        <a href="{{ route('news.show', ['news' => $focs->ref]) }}"><img
                                                                class="img-fluid"
                                                                src="{{ $focs->image ? env('APP_IMAGE_URL') . $focs->image . '.' . $focs->ekstensi : asset('assets/img/no-image.png') }}"
                                                                alt="{{ $focs->Headline }}"></a>
                                                    @endif

                                                </div>
                                                <div class="card-body pt-2 p-0">
                                                    <a href="{{ route('news.show', ['news' => $focs->ref]) }}">
                                                        <h3 class="h5 post-title">{{ $focs->Headline }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        </li>
                                    @endforeach
                                    {{-- <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">MK Tolak Gugatan Serikat Buruh Pertamina
                                                soal
                                                Privatisasi BUMN</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">Disebut BUMN "Hantu" dan Mau Dibubarkan,
                                                Karyawan Istaka Karya Protes</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">Uang Bisa Hilang Seketika, Ini Modus
                                                Investasi
                                                Bodong Berkedok Robot Trading</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h5 post-title">Ini Mobil Paling Banyak Diincar di Balai
                                                Lelang IBID</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="list-group list-group-flush">
                                    @php $i = 0; @endphp
                                    @foreach ($focus2 as $focs2)
                                        <li class="list-group-item bg-transparent p-0 pt-2">
                                            <div class="card bg-transparent border-0 mb-1">
                                                <div class="img-hover-zoom">
                                                    @if ($i == 0)
                                                        <a href="{{ route('news.show', ['news' => $focs2->ref]) }}"><img
                                                                class="img-fluid"
                                                                src="{{ $focs2->image ? env('APP_IMAGE_URL') . $focs2->image . '.' . $focs2->ekstensi : asset('assets/img/no-image.png') }}"
                                                                alt="{{ $focs2->Headline }}"></a>
                                                    @endif

                                                </div>
                                                <div class="card-body pt-2 p-0">
                                                    <a href="{{ route('news.show', ['news' => $focs2->ref]) }}">
                                                        <h3 class="h5 post-title">{{ $focs2->Headline }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        </li>
                                    @endforeach
                                    {{-- <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">MK Tolak Gugatan Serikat Buruh Pertamina
                                                soal
                                                Privatisasi BUMN</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">Disebut BUMN "Hantu" dan Mau Dibubarkan,
                                                Karyawan Istaka Karya Protes</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h4 post-title">Uang Bisa Hilang Seketika, Ini Modus
                                                Investasi
                                                Bodong Berkedok Robot Trading</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent p-0 pt-2">
                                        <a href="detail.html">
                                            <h3 class="h5 post-title">Ini Mobil Paling Banyak Diincar di Balai
                                                Lelang IBID</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                                08:00 WIB
                                            </span>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sticky-side">
                        @include('components.news-popular')

                        {{-- <li class="d-flex mb-4 position-relative">
                                <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                    <a href="detail.html">
                                        <img src="{{asset('assets/img/no-image.png')}}"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="detail.html">
                                        <h3 class="h4 post-title">Uang Bisa Hilang Seketika, Ini Modus Investasi
                                            Bodong Berkedok Robot Trading</h3>
                                    </a>
                                    <div class="mb-2">
                                        <span class="small text-primary">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 position-relative">
                                <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                    <a href="detail.html">
                                        <img src="{{asset('assets/img/no-image.png')}}"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="detail.html">
                                        <h3 class="h4 post-title">Disebut BUMN "Hantu" dan Mau Dibubarkan,
                                            Karyawan
                                            Istaka Karya Protes</h3>
                                    </a>
                                    <div class="mb-2">
                                        <span class="small text-primary">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 position-relative">
                                <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                    <a href="detail.html">
                                        <img src="{{asset('assets/img/no-image.png')}}"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="detail.html">
                                        <h3 class="h4 post-title">MK Tolak Gugatan Serikat Buruh Pertamina soal
                                            Privatisasi BUMN</h3>
                                    </a>
                                    <div class="mb-2">
                                        <span class="small text-primary">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 position-relative">
                                <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                    <a href="detail.html">
                                        <img src="{{asset('assets/img/no-image.png')}}"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="detail.html">
                                        <h3 class="h4 post-title">Kekuasaan Kehakiman dan Lembaga Yudikatif dalam
                                            UUD 1945</h3>
                                    </a>
                                    <div class="mb-2">
                                        <span class="small text-primary">
                                            <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>2 Okt 2021 |
                                            08:00 WIB
                                        </span>
                                    </div>
                                </div>
                            </li> --}}
                        </ol>

                        @include('components.news-category', ['categories' => $categories])

                        {{-- <h2 class="section-title">Tag Popular</h2>
                        <div class="mb-4">
                            @forelse ($tags as $tag)
                                <a href="tag result.html"
                                    class="btn btn-sm btn-outline-secondary rounded-pill m-1">#{{ $tag->tag }}</a>
                            @empty
                            @endforelse

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
