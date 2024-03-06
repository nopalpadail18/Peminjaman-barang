<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        {{-- Styel Css Home --}}
        <link rel="stylesheet" href="/css/style.css">

        {{-- Link Icons Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        {{-- Link Animtion Aos --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>

    <body>

        @include('navbar.navbar')

        <div class="container-fluid" id="container-fluid">
            <div class="container">

                <div class="row py-3 text-center">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12 mt-3">
                        @if (session()->has('success'))
                            {{-- Alert --}}
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('success') }}</strong>
                            </div>
                            {{-- End alert --}}
                        @endif
                    </div>
                </div>

                <div class="container pt-5 px-2">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('/img/Product-hunt-cuate.svg') }}" alt="" width="500px">
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="width: 25rem;">
                                <img src="{{ asset('/img/Product-tour-rafiki.svg') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Peminjaman</h5>
                                    <p class="card-text">Click Button Untuk Melihat Selengkapnya</p>
                                    <a href="category & Barang" class="btn btn-outline-primary btn-sm">Category &
                                        Barang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="row py-3 text-center mt-5" data-aos="flip-left" data-aos-duration="2000">
                    <div class="col-lg-12">
                        <a href="category & Barang" class="btn btn-outline-primary btn-sm">Category & Barang</a>
                    </div>
                </div><br><br><br><br><br><br> --}}

            </div>
        </div>

        @include('footer.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

        {{-- Link Jquery --}}
        <script src="js/jquery.js"></script>

        {{-- Link Script Js --}}
        <script src="js/script.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>
