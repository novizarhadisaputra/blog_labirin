@extends('layouts.frontend')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-5">
                    <img class="img-fluid"
                        src="https://images.unsplash.com/photo-1547223487-c0bbe3535bb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="">
                </div>
                <div class="col-md-7">
                    <h1 class="display-5 fw-bold mb-4">Tentang Kami</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
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
                        molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h1 class="display-5 fw-bold mb-4">Kontak Kami</h1>
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
