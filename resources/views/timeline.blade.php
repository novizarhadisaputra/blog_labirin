@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="timeline">
                        @foreach ($news as $n)
                            <div class="timeline-item flex-lg-row">
                                <div class="timeline-date">
                                    <span class="bg-white p-2">{{ date('d M Y', strtotime($n->Tanggal)) }}</span>
                                </div>
                                <div class="timeline-content">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-lg-flex">
                                                <div
                                                    class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                                    <a class="post-badge" href="kategori result.html">
                                                        <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                                aria-hidden="true"></i>
                                                            {{ $n->tags[0]->criteria()->first()->Kriteria }}</span>
                                                    </a>
                                                    <a href="{{ route('news.show', ['news' => $n->ref]) }}">
                                                        <img src="{{ $n->image ? env('APP_IMAGE_URL') . $n->image . '.' . $n->ekstensi : asset('assets/img/no-image.png') }}"
                                                            alt="{{ $n->Headline }}">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <a href="{{ route('news.show', ['news' => $n->ref]) }}">
                                                        <h2 class="post-title">{{ $n->Headline }}</h2>
                                                    </a>
                                                    <div class="mb-2">
                                                        <a href="kategori result.html">
                                                            <span class="small text-primary">
                                                                <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                                {{ $n->UserUpdate }}
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="post-descmin">
                                                        {!! $n->Rangkuman !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="timeline-item flex-lg-row">
                            <div class="timeline-date">
                                <span class="bg-white p-2">10 February 2021</span>
                            </div>
                            <div class="timeline-content">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div
                                                class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                                <a class="post-badge" href="kategori result.html">
                                                    <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                            aria-hidden="true"></i> Sosial</span>
                                                </a>
                                                <a href="detail.html">
                                                    <img src="https://akcdn.detik.net.id/community/media/visual/2016/12/20/b64dd746-3980-4392-be82-b817cf4be249.jpg?w=700&amp;q=90"
                                                        alt="...">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <a href="detail.html">
                                                    <h2 class="post-title">Kekuasaan Kehakiman dan Lembaga Yudikatif
                                                        dalam UUD 1945</h2>
                                                </a>
                                                <div class="mb-2">
                                                    <a href="kategori result.html">
                                                        <span class="small text-primary">
                                                            <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                            Bambang Pamungkas
                                                        </span>
                                                    </a>
                                                </div>
                                                <p class="post-descmin">
                                                    Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai
                                                    elektronik (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021).
                                                    Bendahara negara ini menuturkan, pengadaan meterai elektronik merespons
                                                    perkembangan dokumen bermuatan transaksi material
                                                    secara elektronik yang belakangan makin marak beredar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item flex-lg-row">
                            <div class="timeline-date">
                                <span class="bg-white p-2">10 February 2021</span>
                            </div>
                            <div class="timeline-content">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div
                                                class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                                <a class="post-badge" href="kategori result.html">
                                                    <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                            aria-hidden="true"></i> Sosial</span>
                                                </a>
                                                <a href="detail.html">
                                                    <img src="https://akcdn.detik.net.id/community/media/visual/2016/12/20/b64dd746-3980-4392-be82-b817cf4be249.jpg?w=700&amp;q=90"
                                                        alt="...">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <a href="detail.html">
                                                    <h2 class="post-title">Kekuasaan Kehakiman dan Lembaga Yudikatif
                                                        dalam UUD 1945</h2>
                                                </a>
                                                <div class="mb-2">
                                                    <a href="kategori result.html">
                                                        <span class="small text-primary">
                                                            <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                            Bambang Pamungkas
                                                        </span>
                                                    </a>
                                                </div>
                                                <p class="post-descmin">
                                                    Menteri Keuangan Sri Mulyani Indrawati resmi meluncurkan meterai
                                                    elektronik (e-meterai) dengan nominal Rp 10.000, Jumat (1/10/2021).
                                                    Bendahara negara ini menuturkan, pengadaan meterai elektronik merespons
                                                    perkembangan dokumen bermuatan transaksi material
                                                    secara elektronik yang belakangan makin marak beredar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
