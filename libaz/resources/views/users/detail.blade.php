@section('topTitle', '')
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="card shadow-none bg-dark p-3">
                    <img src="{{ asset('img/favicon.png') }}" class="img-thumbnail" style="height" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="border-bottom">
                    <h1 class="mb-0 mt-md-0 mt-3">{{ $data->name }}</h1>
                    <p>slogan</p>
                </div>
                <h5>Informasi Lengkap Buku</h5>
                <div class="mt-3">
                    <div class="col-md-4">
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <td>Penulis</td>
                                    <td>Pidi Baiq</td>
                                </tr>

                                <tr>
                                    <td>Penulis</td>
                                    <td>Pidi Baiq</td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>Pidi Baiq</td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>Pidi Baiq</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <h6>Sinopsis:</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptate et animi
                            architecto labore dolorem perspiciatis? Voluptatum sequi aliquam itaque repellendus vel.
                            Aperiam fugit mollitia facere nulla dolore neque ratione. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 px-lg-4 px-3">
                <div class="position-sticky" style="top:2rem;">
                    <div class="card shadow-none border">
                        <div class="p-3">
                            <div class="row border-bottom">
                                <div class="col-6">
                                    <h6>Ketersediaan:</h6>
                                    <p>stok: 12</p>
                                </div>
                                <div class="col-6 align-items-center">
                                    <div
                                        class="card text-center p-2 shadow bg-gradient-success text-white font-weight-bold">
                                        Tersedia
                                    </div>
                                    <div class="card text-center p-2 shadow bg-gradient-danger text-white font-weight-bold">
                                        Habis
                                    </div>
                                </div>
                            </div>
                            <h6>Position: </h6>
                            <table class="table align-items-center">
                                <tbody>
                                    <tr>
                                        <td>Rak</td>
                                        <td>:</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat</td>
                                        <td>:</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-dark w-100">pinjam</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-none border my-3 p-2">
            <div class="row">
                <div class="col-md-3 text-center p-2">
                    <div class="h1">
                        <span class="text-warning h3"><i class="fas fa-star"></i> </span> 5.0
                    </div>
                    <p class="font-weight-bold">100% dari pembaca menyukainya</p>
                </div>
                <div class="col-9 text-center p-2">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-icons"
                                    role="tab" aria-controls="preview" aria-selected="true">
                                    <i class="ni ni-badge text-sm me-2"></i> My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-icons"
                                    role="tab" aria-controls="code" aria-selected="false">
                                    <i class="ni ni-laptop text-sm me-2"></i> Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
