<h2 class="section-title">Kategori</h2>
    <ul class="list-group list-group-flush mb-4">
        @foreach ($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('kategori.show', ['kategori' => $category->ref]) }}">
                    <i class="fa fa-folder mx-1" aria-hidden="true"></i>
                    {{ $category->Kriteria }}
                </a>
                @php
                    $count = 0;
                    foreach($category->tags as $t) {
                        $count = $count + $t->total_news;
                    }
                @endphp
                <span class="badge badge-primary badge-pill">{{ $count }}</span>
            </li>
        @endforeach
    </ul>
