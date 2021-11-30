<h2 class="section-title">Artikel Populer</h2>
<ol class="list-group-numbered list-pop p-1">
    @forelse ($picks as $pick)
        <li class="d-flex mb-4 position-relative">
            <div class="flex-shrink-0 img-thumb-sm img-hover-zoom mx-1">
                <a href="{{ route('news.show', ['news' => $pick->news->ref]) }}">
                    <img src="{{ $pick->news->image ? 'https://labirin.id/asset/Images/medium/' . $pick->news->image . '.' . $pick->news->ekstensi : asset('assets/img/no-image.png') }}"
                        alt="...">
                </a>
            </div>
            <div class="flex-grow-1 ms-3">
                <a href="{{ route('news.show', ['news' => $pick->news->ref]) }}">
                    <h3 class="h4 post-title">{{ $pick->news->Headline }}</h3>
                </a>
                <div class="mb-2">
                    <span class="small text-primary">
                        <i class="bi bi-calendar2 mx-1"
                            aria-hidden="true"></i>{{ date('d M Y', strtotime($pick->news->Tanggal)) }}
                    </span>
                </div>
            </div>
        </li>
    @empty
    @endforelse
