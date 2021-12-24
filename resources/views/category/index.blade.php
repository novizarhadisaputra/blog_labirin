@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <form class="row g-3 mb-4" action="{{ route('search.index') }}" method="GET">
                <input type="text" value="{{ request()->input('keyword') }}" name="keyword" style="display: none">
                <div class="col-md">
                    <select id="inputKategori" name="category" class="form-select">
                        <option value="">Semua</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->ref }}"
                                {{ request()->input('category') == $category->ref ? 'selected' : '' }}>
                                {{ $category->Kriteria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md">
                    <input type="date" value="{{ request()->input('date') ?? '' }}" name="date" class="form-control"
                        id="inputDate">
                </div>
                <div class="col-md">
                    <select id="inputUrutkan" name="orderBy" class="form-select">
                        <option value="desc" {{ request()->input('orderBy') == 'desc' ? 'selected' : '' }}>Terbaru
                        </option>
                        <option value="asc" {{ request()->input('orderBy') == 'asc' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="icon-button" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>

    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach ($categories as $category)
                            @foreach ($category->news as $n)
                                <div class="col-md-6">
                                    <div class="card border-0 mb-4">
                                        <div class="img-hover-zoom">
                                            <a class="post-badge"
                                                href="{{ route('kategori.show', ['kategori' => $category->ref]) }}">
                                                <span class="badge badge-secondary p-1"><i class="bi bi-folder mx-1"
                                                        aria-hidden="true"></i> {{ $category->Kriteria }}</span>
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
                                                <a href="">
                                                    <span class="small text-primary">
                                                        <i class="bi bi-person-square mx-1" aria-hidden="true"></i>
                                                        {{ $n->UserUpdate }}
                                                    </span>
                                                </a>
                                                <span class="small">
                                                    <i class="bi bi-calendar2 mx-1" aria-hidden="true"></i>
                                                    {{ date('d M Y', strtotime($n->Tanggal)) }}
                                                </span>
                                                <span class="small ms-1">
                                                    {{ ucwords($n->media) }}
                                                </span>
                                            </div>
                                            <div class="post-descmin">
                                                {!! $n->Rangkuman !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-side">

                        @include('components.news-popular', ['picks' => $picks])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
