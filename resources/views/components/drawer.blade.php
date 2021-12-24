<div class="offcanvas offcanvas-start border-0" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <h1></h1>
        <button type="button" class="icon-button" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="bi bi-x"></i></button>
    </div>
    <div class="offcanvas-body h-100">
        <div class="d-flex justify-content-center">
            <a href="{{ route('root') }}"><img src="{{ asset('assets/img/labirin.svg') }}" alt="" height="20"></a>
        </div>
        <nav class="nav flex-column p-4 side-menu">
            <ul class="list-unstyled mb-0 py-3 pt-md-1">
                @foreach ($categories as $category)
                    <li class="mb-1">
                        <button class="btn d-inline-flex align-items-center collapsed w-100" data-bs-toggle="collapse"
                            data-bs-target="#{{ $category->Kriteria }}-collapse" aria-expanded="false">
                            {{ $category->Kriteria }}
                        </button>
                        <div class="collapse" id="{{ $category->Kriteria }}-collapse">
                            <ul class="list-unstyled ps-3">
                                @foreach ($category->tags as $tag)
                                    <li class="p-2">
                                        <a class="my-2 py-1 px-3"
                                            href="{{ route('tag.show', ['tag' => $tag->ref]) }}">{{ $tag->tag }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="text-center mt-auto">
            <h5>Ikuti kami :</h5>
            <ul class="list-unstyled list-inline mt-3">
                <li class="list-inline-item h1"><a href="whatsapp://send?text=https://labirin.id" data-action="share/whatsapp/share"><i class="bi bi-whatsapp"></i></a></li>
                <li class="list-inline-item h1"><a href="https://www.facebook.com/sharer/sharer.php?u=https://labirin.id" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item h1"><a href="https://twitter.com/intent/tweet?url=https://labirin.id"><i class="bi bi-twitter"></i></a></li>
                {{-- <li class="list-inline-item h1"><a href=""><i class="bi bi-linkedin"></i></a></li> --}}
                <li class="list-inline-item h1"><a href="https://telegram.me/share/url?url=https://labirin.id&text=Labirin"><i class="bi bi-telegram"></i></a></li>
                {{-- <li class="list-inline-item h1"><a href="#"><i class="bi bi-envelope"></i></a></li> --}}
            </ul>
        </div>
    </div>
</div>
