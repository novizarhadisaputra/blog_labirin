@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="alert bg-img border-0 text-center py-5">
            </div>
        </div>

    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-primary border-0 rounded-md mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{ route('kategori.show', ['kategori' => 2]) }}" class="h2 text-primary "><i
                                        class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus
                                    Ekonomi</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>
                        <div class="mb-4">
                            @foreach ($economies as $economy)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['slug' => $economy->slug, 'news' => $economy->ref]) }}">
                                            <img src="{{ $economy->image ? env('APP_IMAGE_URL') . $economy->image . '.' . $economy->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $economy->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['slug' => $economy->slug, 'news' => $economy->ref]) }}">
                                            <h3 class="h4 post-title">{{ $economy->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($economy->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="alert alert-secondary border-0 rounded-md mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{ route('kategori.show', ['kategori' => 3]) }}" class="h2 text-secondary "><i
                                        class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus Sosial</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>
                        <div class="mb-4">
                            @foreach ($socials as $social)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['slug' => $social->slug, 'news' => $social->ref]) }}">
                                            <img src="{{ $social->image ? env('APP_IMAGE_URL') . $social->image . '.' . $social->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $social->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['slug' => $social->slug, 'news' => $social->ref]) }}">
                                            <h3 class="h4 post-title">{{ $social->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($social->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="alert alert-danger border-0 rounded-md mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{ route('kategori.show', ['kategori' => 5]) }}" class="text-danger h2"><i
                                        class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus
                                    Birokrasi</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>
                        <div class="mb-4">
                            @foreach ($birokrasi as $biro)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['slug' => $biro->slug, 'news' => $biro->ref]) }}">
                                            <img src="{{ $biro->image ? env('APP_IMAGE_URL') . $biro->image . '.' . $biro->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $biro->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['slug' => $biro->slug, 'news' => $biro->ref]) }}">
                                            <h3 class="h4 post-title">{{ $biro->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($biro->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="alert alert-success border-0 rounded-md mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{ route('kategori.show', ['kategori' => 4]) }}" class="text-success h2"><i
                                        class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus
                                    Sumber Daya Alam</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>
                        <div class="mb-4">
                            @foreach ($sumberdaya as $sda)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['slug' => $sda->slug, 'news' => $sda->ref]) }}">
                                            <img src="{{ $sda->image ? env('APP_IMAGE_URL') . $sda->image . '.' . $sda->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $sda->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['slug' => $sda->slug, 'news' => $sda->ref]) }}">
                                            <h3 class="h4 post-title">{{ $sda->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($sda->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="alert alert-info border-0 rounded-md mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <a href="{{route('kategori.show', ['kategori' => 6])}}" class="text-info h2"><i class="bi bi-broadcast-pin me-3 " aria-hidden="true"></i>Fokus
                                    Infrastruktur</a>
                            </div>
                            <div class="owl-top-nav"> </div>
                        </div>
                        <div class="mb-4">
                            @foreach ($infrastruktur as $infra)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['slug' => $infra->slug, 'news' => $infra->ref]) }}">
                                            <img src="{{ $infra->image ? env('APP_IMAGE_URL') . $infra->image . '.' . $infra->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $infra->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['slug' => $infra->slug, 'news' => $infra->ref]) }}">
                                            <h3 class="h4 post-title">{{ $infra->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($infra->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sticky-side">
                        @include('components.news-popular')
                        @include('components.news-category', ['categories' => $categories])

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
