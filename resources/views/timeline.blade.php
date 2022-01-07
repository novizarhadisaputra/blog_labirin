@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <form action="{{ route('timeline') }}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-11">
                                <input type="text" placeholder="Search" name="keyword" class="form-control">
                            </div>
                            <div class="col-md-1 text-center">
                                <button class="icon-button" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
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
                                                    <a class="post-badge"
                                                        href="{{ route('kategori.show', ['kategori' => $n->tags[0]->criteria()->first()->ref]) }}">
                                                        <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                                aria-hidden="true"></i>
                                                            {{ $n->tags[0]->criteria()->first()->Kriteria }}</span>
                                                    </a>
                                                    <a href="{{ route('news.show', ['news' => $n->ref, 'slug' => $n->slug]) }}">
                                                        <img src="{{ $n->image ? env('APP_IMAGE_URL') . $n->image . '.' . $n->ekstensi : asset('assets/img/no-image.png') }}"
                                                            alt="{{ $n->Headline }}">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <a href="{{ route('news.show', ['news' => $n->ref, 'slug' => $n->slug]) }}">
                                                        <h2 class="post-title">{{ $n->Headline }}</h2>
                                                    </a>
                                                    <div class="mb-2">
                                                        <a href="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
