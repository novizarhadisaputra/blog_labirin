@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="alert alert-primary border-0 text-center py-5">
                <span class="small fw-bold text-primary">Tags</span>
                <h2 class="h1 my-2">{{ $tag->tag }}</h2>
                <span class="text-primary">( {{ $tag->total_news }} )</span>
            </div>
        </div>

    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach ($news as $n)
                            <div class="col-md-6">
                                <div class="card border-0 mb-4">
                                    <div class="img-hover-zoom">
                                        <a class="post-badge" href="kategori result.html">
                                            <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                    aria-hidden="true"></i> Sosial</span>
                                        </a>
                                        <a href="{{ route('news.show', ['news' => $n->ref]) }}"><img
                                                class="img-fluid"
                                                src="{{ $n->image ? env('APP_IMAGE_URL') . '/' . $n->image . '.' . $n->ekstensi : asset('assets/img/no-image.png') }}"
                                                alt="..."></a>
                                    </div>
                                    <div class="card-body py-2 px-0">
                                        <a href="{{ route('news.show', ['news' => $n->ref]) }}">
                                            <h3 class="h4 post-title">{{ $n->Headline }}</h3>
                                        </a>
                                        <div class="mb-2">
                                            <a href="kategori result.html">
                                                <span class="small text-primary">
                                                    <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                    {{ $n->UserUpdate }}
                                                </span>
                                            </a>
                                            <span class="small">
                                                <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                {{ date('d M Y', strtotime($n->Tanggal)) }}
                                            </span>
                                        </div>
                                        <p class="post-descmin">
                                            {!! $n->Rangkuman !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="text-center">
                        {{-- <button type="button" class="btn btn-sm btn-outline-primary">Load more</button> --}}
                        {{ $news->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-side">

                        @include('components.news-popular', ['picks' => $pick])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
