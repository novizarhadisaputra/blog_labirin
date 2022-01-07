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
                                        <a href="{{ route('news.show', ['news' => $economy->ref, 'slug' => $economy->slug]) }}"
                                            target="_blank">
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
                                        <a
                                            href="{{ route('news.show', ['news' => $economy->ref, 'slug' => $economy->slug]) }}">
                                            <h2 class="text-white post-title">{{ $economy->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme mb-4" id="top2-slider">
                        @foreach ($socials as $social)
                            <div class="item">
                                <div class="post-slider">
                                    <div class="position-relative img-hover-zoom ">
                                        <a href="{{ route('news.show', ['news' => $social->ref, 'slug' => $social->slug]) }}"
                                            target="_blank">
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
                                        <a
                                            href="{{ route('news.show', ['news' => $social->ref, 'slug' => $social->slug]) }}">
                                            <h2 class="text-white post-title">{{ $social->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="owl-carousel owl-theme mb-4" id="top3-slider">
                        @foreach ($birokrasi as $biro)
                            <div class="item">
                                <div class="post-slider">
                                    <div class="position-relative img-hover-zoom ">
                                        <a href="{{ route('news.show', ['news' => $biro->ref, 'slug' => $biro->slug]) }}"
                                            target="_blank">
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
                                        <a
                                            href="{{ route('news.show', ['news' => $biro->ref, 'slug' => $biro->slug]) }}">
                                            <h2 class="text-white post-title">{{ $biro->Headline }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="section-title">Berita Utama</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($hotNews as $hot)
                            <div class="col-md-6">
                                <div class="card border-0 mb-4">
                                    <div class="img-hover-zoom">
                                        <a class="post-badge"
                                            href="{{ route('kategori.show', ['kategori' => $hot->news->tags[0]->criteria()->first()->ref]) }}">
                                            <span class="badge badge-danger p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i>
                                                {{ $hot->news->tags[0]->criteria()->first()->Kriteria }}</span>
                                        </a>
                                        <a
                                            href="{{ route('news.show', ['news' => $hot->news->ref, 'slug' => $hot->news->slug]) }}"><img
                                                class="img-fluid"
                                                src="{{ $hot->news->image ? env('APP_IMAGE_URL') . $hot->news->image . '.' . $hot->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $hot->news->Headline }}"></a>
                                    </div>
                                    <div class="card-body py-2 px-0">
                                        <a
                                            href="{{ route('news.show', ['news' => $hot->news->ref, 'slug' => $hot->news->slug]) }}">
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
                            <h2 class="section-title">Semua Berita</h2>
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
                                            <a
                                                href="{{ route('news.show', ['news' => $eh->news->ref, 'slug' => $eh->news->slug]) }}"><img
                                                    class="img-fluid"
                                                    src="{{ $eh->news->image ? env('APP_IMAGE_URL') . $eh->news->image . '.' . $eh->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                    alt="{{ $eh->news->Headline }}"></a>
                                        </div>
                                        <div class="card-body py-2 px-0">
                                            <a
                                                href="{{ route('news.show', ['news' => $eh->news->ref, 'slug' => $eh->news->slug]) }}">
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
                                                <span class="small ms-1">
                                                    {{ ucwords($eh->news->media) }}
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
                                        <a
                                            href="{{ route('news.show', ['news' => $eh->news->ref, 'slug' => $eh->news->slug]) }}">
                                            <img src="{{ $eh->news->image ? env('APP_IMAGE_URL') . $eh->news->image . '.' . $eh->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $eh->news->Headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a
                                            href="{{ route('news.show', ['news' => $eh->news->ref, 'slug' => $eh->news->slug]) }}">
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
                                                        <a
                                                            href="{{ route('news.show', ['news' => $focs->ref, 'slug' => $focs->slug]) }}"><img
                                                                class="img-fluid"
                                                                src="{{ $focs->image ? env('APP_IMAGE_URL') . $focs->image . '.' . $focs->ekstensi : asset('assets/img/no-image.png') }}"
                                                                alt="{{ $focs->Headline }}"></a>
                                                    @endif

                                                </div>
                                                <div class="card-body pt-2 p-0">
                                                    <a
                                                        href="{{ route('news.show', ['news' => $focs->ref, 'slug' => $focs->slug]) }}">
                                                        <h3 class="h5 post-title">{{ $focs->Headline }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        </li>
                                    @endforeach
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
                                                        <a
                                                            href="{{ route('news.show', ['news' => $focs2->ref, 'slug' => $focs2->slug]) }}"><img
                                                                class="img-fluid"
                                                                src="{{ $focs2->image ? env('APP_IMAGE_URL') . $focs2->image . '.' . $focs2->ekstensi : asset('assets/img/no-image.png') }}"
                                                                alt="{{ $focs2->Headline }}"></a>
                                                    @endif

                                                </div>
                                                <div class="card-body pt-2 p-0">
                                                    <a
                                                        href="{{ route('news.show', ['news' => $focs2->ref, 'slug' => $focs2->slug]) }}">
                                                        <h3 class="h5 post-title">{{ $focs2->Headline }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sticky-side">
                        @include('components.news-popular')
                        @include('components.news-category', ['categories' => $categories])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
