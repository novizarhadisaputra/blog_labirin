<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labirin | News & Update</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap icon CSS -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{ asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Main css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('components.search')

    @include('components.drawer')

    @include('components.header')

    <main>
        @yield('content')
    </main>

    <footer class="container-fluid bg-secondary mt-5 pb-0">
        <div class="container">
            <div class="footer-copyright row py-4">
                <div class="d-md-flex justify-content-between">
                    <span class="font-weight-bold text-white">Copyright © PT Labirin</span>
                    <div class="">
                        <a class="font-weight-bold text-white" href="#">Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <div class="scrollBtn">
        <button type="button" class="icon-button" id="scrollBtn" onclick="topFunction()"><i
                class="bi bi-arrow-up-circle"></i></button>
    </div>
    <!-- Scroll Top -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Masonry -->
    <script type="text/javascript" src="{{ asset('assets/vendor/masonry/masonry.pkgd.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Main -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Init -->
    <script type="text/javascript">
        $('#top1-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: ['<i class="bi bi-arrow-left-circle" aria-hidden="true"></i>',
                '<i class="bi bi-arrow-right-circle" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#top2-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: ['<i class="bi bi-arrow-left-circle" aria-hidden="true"></i>',
                '<i class="bi bi-arrow-right-circle" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#top3-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            dots: false,
            margin: 20,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 10,
                },
                1000: {
                    items: 2
                }
            }
        })
        $('#fokus-slider').owlCarousel({
            loop: true,
            dots: false,
            margin: 30,
            nav: true,
            navContainer: '.owl-top-nav',
            navText: ['<i class="bi bi-arrow-left-circle" aria-hidden="true"></i>',
                '<i class="bi bi-arrow-right-circle" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>
