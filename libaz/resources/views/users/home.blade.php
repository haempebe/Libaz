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
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
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
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
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
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
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
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 mb-auto text-center">
                    <div class="">
                        <img src="{{asset('img/icon/3-User.png')}}" alt="" class="img-fluid">
                        <h6 class="text-white">Keanggotaan</h6>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mb-auto text-center">
                    <div class="">
                        <img src="{{asset('img/icon/Book.png')}}" alt="" class="img-fluid">
                        <h6 class="text-white">E-book</h6>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mb-auto text-center">
                    <img src="{{asset('img/icon/Open Book.png')}}" alt="" class="img-fluid">
                    <h6 class="text-white">Hard Book</h6>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mb-auto text-center">
                    <img src="{{asset('img/icon/Knowledge Sharing.png')}}" alt="" class="img-fluid">
                    <h6 class="text-white">Referensi</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-7 col-8 text-center h3 mx-auto border-bottom pb-2">
        Buku Terbaru
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach ($allBuku as $item)
            <div class="col-md-3 col-12 mb-4">
                <div class="card shadow-none border">
                    <img src="{{ asset('img/cover/' . $item->cover) }}" class="figure-img img-fluid rounded" style="object-fit:contain;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p>{{ $item->kategori->name }}</p>
                        <a href="{{ url('library/' . $item->name) }}" class="btn btn-dark btn-sm">lihat</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="my-5 col-8 text-center h3 mx-auto border-bottom pb-2">
        Review Buku
    </div>
    <div class="bg-dark py-1">
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="/img/cover/bulan.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text font-size-lg">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="/img/cover/bulan.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text font-size-lg">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="/img/cover/bulan.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text font-size-lg">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="/img/cover/bulan.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay ">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text font-size-lg">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-light" type="button">View all</button>
            </div>
        </div>
    </div>
    <div class="my-5 col-8 text-center h3 mx-auto border-bottom pb-2">
        Review Mereka
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="/img/cover/hamidzan.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Card title</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="/img/cover/hamidzan.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Card title</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                <div class="card ">
                    <img src="/img/cover/hamidzan.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Card title</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="/img/cover/hamidzan.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white">Card title</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection