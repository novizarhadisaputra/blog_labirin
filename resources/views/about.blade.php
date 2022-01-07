@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <img class="img-fluid"
                        src="{{ asset('assets/img/labirin.svg') }}"
                        alt="">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-12">
                    <h1 class="h2 fw-bold mb-4">Tentang Kami</h1>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                        qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                        amet, consectetur, adipisci
                        velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi
                        consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                        molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p> --}}
                    <p>1) Berita yang ada di aplikasi ini adalah milik masing-masing penerbitnya, dan telah
                        di sebarluaskan oleh masing-masing penerbit melalui media cetak dan atau media
                        digital milik setiap penerbit;</p>
                    <p>2) Berita yang ada di aplikasi ini hanya resume, kumpulan atau sejenis &ldquo;kliping&rdquo;
                        dari berita aslinya dengan tujuan untuk dipergunakan dalam mendukung kebutuhan
                        masing-masing pembaca;</p>
                    <p>3) Semua berita yang akan digunakan di luar aplikasi ini harap pada
                        referensinya dicantumkan dengan referensi yang berasal dari sumber aslinya;</p>
                    <p>4) Apabila ada keberatan dari sumber berita atas berita yang ditampilkan disini
                        silahkan menghubungi kami melalui email contact@labirin.id</p>
                    <p>5) Terima kasih dan dimohon feedback dan, masukannya untuk membuat aplikasi ini semakin
                        baik.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h1 class="h2 fw-bold mb-4">Kontak Kami</h1>
                    <p><a href="https://goo.gl/maps/2weRKCXCxReVtX1W8" target="_blank"><span class="text-primary">Menara
                                LABIRIN</span></a> (Lantai 2)<br> Jl. Raya Boulevard Barat Blok XC 5-6 B<br> Kelapa Gading
                        Barat, Kelapa Gading<br> Jakarta Utara,
                        DKI Jakarta,14240 - Indonesia
                    </p>
                    <p>
                        Phone: +6221 2938 2700, Fax: +6221 2938 2699<br> Email: <a href="mailto:news@labirin.co.id"
                            target="_blank"><span class="text-primary">news@labirin.co.id</span></a></p>
                </div>

                <div class="col-md-8">
                    <div id="map" style="width:100%;height:300px;"></div>
                </div>

            </div>
        </div>
    </section>
@endsection
