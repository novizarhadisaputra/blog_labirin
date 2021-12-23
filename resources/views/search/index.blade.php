@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="alert alert-primary border-0 text-center py-5">
                <span class="small fw-bold text-primary">Hasil Pencarian Untuk</span>
                <h2 class="h1 my-2">{{ request()->input('keyword') }}</h2>
                <span class="text-primary">(30) Result</span>
            </div>
        </div>

    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form class="row g-3 mb-4" action="{{ route('search.index') }}" method="GET">
                        <div class="col-md-4">
                            <input type="text" placeholder="Search" name="keyword" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <select id="inputKategori" name="category" class="form-select">
                                <option value="">Semua</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->ref }}"
                                        {{ request()->input('category') == $category->ref ? 'selected' : '' }}>
                                        {{ $category->Kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" value="{{ request()->input('date') ?? '' }}" name="date"
                                class="form-control" id="inputDate">
                        </div>
                        <div class="col-md">
                            <button class="icon-button" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    <div class="mb-4">
                        @foreach ($news as $n)
                            <div class="d-md-flex mb-4">
                                <div class="flex-shrink-0 img-thumb-md img-hover-zoom mx-1 position-relative mb-4">
                                    <a class="post-badge" href="kategori result.html">
                                        <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                aria-hidden="true"></i>{{ $n->tags[0]->criteria()->first()->Kriteria }}</span>
                                    </a>
                                    <a href="detail.html">
                                        <img src="{{ $n->image ? env('APP_IMAGE_URL') . '/' . $n->image . '.' . $n->ekstensi : asset('assets/img/no-image.png') }}"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="detail.html">
                                        <h2 class="post-title">{{ $n->Headline }}
                                        </h2>
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
                                    <div class="post-descmin">
                                        {!! $n->Rangkuman !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $news->appends(request()->all())->links() }}

                </div>

                <div class="col-md-4">
                    <div class="sticky-side">
                        @include('components.news-popular', ['picks' => $pick])
                        @include('components.news-category', ['categories' => $categories])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
