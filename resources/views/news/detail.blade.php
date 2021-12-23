@extends('layouts.frontend')
@section('content')
    <section class="mt-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb font-weight-bold">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news->Headline }}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 mb-4">
                        <h3 class="display-6 fw-bold mb-3">{{ $news->Headline }}
                        </h3>
                        <div class="mb-2">
                            <a
                                href="{{ route('kategori.show', ['kategori' => $news->tags[0]->criteria()->first()->ref]) }}">
                                <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1" aria-hidden="true"></i>
                                    {{ $news->tags[0]->criteria()->first()->Kriteria }}</span>
                            </a>
                            <a
                                href="{{ route('kategori.show', ['kategori' => $news->tags[0]->criteria()->first()->ref]) }}">
                                <span class="small text-primary">
                                    <i class="bi bi-person-square mx-1" aria-hidden="true"></i> {{ $news->UserUpdate }}
                                </span>
                            </a>
                            <span class="small">
                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                {{ date('d M Y', strtotime($news->Tanggal)) }}
                            </span>
                            <span class="small ms-1">
                                {{ ucwords($news->media) }}
                            </span>
                        </div>
                        <div class="img-hover-zoom">
                            <img class="img-fluid w-100"
                                src="{{ $news->image ? env('APP_IMAGE_URL') . '/' . $news->image . '.' . $news->ekstensi : asset('assets/img/no-image.png') }}"
                                alt="{{ $news->Headline }}">
                        </div>
                        <div class="card-body py-2 px-0">
                            <div class="content-detail-blog">
                                {!! $news->Rangkuman !!}
                            </div>
                            <div class="mt-4 pt-4 border-top">
                                <div class="mb-4">
                                    <h5>Tags :</h5>
                                    @foreach ($news->tags as $tag)
                                        <a href="{{ route('tag.show', ['tag' => $tag]) }}"
                                            class="btn btn-sm btn-outline-secondary rounded-pill m-1">#{{ $tag->tag }}</a>
                                    @endforeach
                                    {{-- <a href="tag result.html"
                                        class="btn btn-sm btn-outline-secondary rounded-pill m-1">#ACV</a>
                                    <a href="tag result.html"
                                        class="btn btn-sm btn-outline-secondary rounded-pill m-1">#Astra</a>
                                    <a href="tag result.html"
                                        class="btn btn-sm btn-outline-secondary rounded-pill m-1">#Inspeksi</a>
                                    <a href="tag result.html"
                                        class="btn btn-sm btn-outline-secondary rounded-pill m-1">#Mobil</a>
                                    <a href="tag result.html"
                                        class="btn btn-sm btn-outline-secondary rounded-pill m-1">#Mobil Murah</a> --}}
                                </div>
                                <div class="mb-4">
                                    <h5>Share To :</h5>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-whatsapp"></i></a></li>
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-facebook"></i></a></li>
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-twitter"></i></a></li>
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-linkedin"></i></a></li>
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-telegram"></i></a></li>
                                        <li class="list-inline-item display-6"><a href="#"><i
                                                    class="bi bi-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-side">
                        <h2 class="section-title">Postingan Terkait</h2>
                        <div class="mb-4">
                            @forelse ($related as $relate)
                                <div class="d-flex mb-4">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['news' => $relate->id_news]) }}">
                                            <img src="{{ $relate->img ? env('APP_IMAGE_URL') . '/' . $relate->img . '.' . $relate->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="{{ $relate->headline }}">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['news' => $relate->id_news]) }}">
                                            <h3 class="h4 post-title">{{ $relate->headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($relate->tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>

                        <h2 class="section-title">Artikel Populer</h2>
                        <ol class="list-group-numbered list-pop p-1">
                            @forelse ($pick as $hit)
                                <li class="d-flex mb-4 position-relative">
                                    <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                                        <a href="{{ route('news.show', ['news' => $hit->news->ref]) }}">
                                            <img src="{{ $hit->news->image ? env('APP_IMAGE_URL') . '/' . $hit->news->image . '.' . $hit->news->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="...">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <a href="{{ route('news.show', ['news' => $hit->news->ref]) }}">
                                            <h3 class="h4 post-title">{{ $hit->news->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <span class="small text-primary">
                                                <i class="bi bi-calendar2 mx-1"
                                                    aria-hidden="true"></i>{{ date('d M Y', strtotime($hit->news->Tanggal)) }}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
