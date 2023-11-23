@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')

<div class="col-md-8 mx-auto">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="border-radius: 10px">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.ibb.co/MCJK9bL/Carousel.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.ibb.co/MCJK9bL/Carousel.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.ibb.co/MCJK9bL/Carousel.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="bg-dark mt-5">
    <div class="container py-4">
        <form action="">
            <div class="bg-white border-radius-lg d-flex me-2">
                <input type="search" class="form-control border-0 ps-3" placeholder="Search">
                <button class="btn btn-dark my-1 me-1">Search</button>
            </div>
        </form>
    </div>
</div>

    <div class="container mt-5">
        <div class="row gx-2">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm text-uppercase font-weight-bold">Jumlah Pengguna</p>
                                    <h5 class="font-weight-bolder">
                                        53
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm text-uppercase font-weight-bold">Jumlah Buku</p>
                                    <h5 class="font-weight-bolder">
                                        53
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm text-uppercase font-weight-bold">Tersering Membaca</p>
                                    <h5 class="font-weight-bolder">
                                        Alip <small class="p">10x membaca</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm text-uppercase font-weight-bold">Terjarang Membaca</p>
                                    <h5 class="font-weight-bolder">
                                        53
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- /Card --}}
</div>

{{-- layanan --}}
<div>
    <div class="my-5 col-8 text-center h3 mx-auto border-bottom pb-2">
        Layanan Kami
    </div>
    <div class="bg-dark py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('anggota') }}">
                            <div class="card-body text-center p-3">
                                <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                                <div class="text-sm font-weight-bolder">Keanggotaan</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <img type="button" class="w-100 border-radius-md p-5" src="/img/favicon.png">
                            <div class="text-sm font-weight-bolder">Keanggotaan</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                            <div class="text-sm font-weight-bolder">Keanggotaan</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="card">
                        <div class="card-body text-center p-3">
                            <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                            <div class="text-sm font-weight-bolder">Keanggotaan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-7 col-8 text-center h3 mx-auto border-bottom pb-2">
        Buku Terpopuler
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-7 col-8 text-center h3 mx-auto border-bottom pb-2">
        Review Buku
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <div class="card-body text-center p-3">
                        <img class="w-100 border-radius-md p-5" src="/img/favicon.png">
                        <div class="text-sm font-weight-bolder">Keanggotaan</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card shadow-none border">
                    <img src="/img/favicon.png" class="card-img-top" style="max-height: 120px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection