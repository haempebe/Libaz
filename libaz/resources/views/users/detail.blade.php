@section('topTitle', '')
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="card shadow-none bg-dark p-3">
                    <img src="{{ asset('img/cover/' . $data->cover) }}" class="img-thumbnail" style="height" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="border-bottom">
                    <h2 class="mt-md-0 mt-3">{{ $data->name }}</h2>
                    <p>{{ $data->kategori->name }}</p>
                </div>
                <h5>Informasi Lengkap Buku</h5>
                <div class="mt-3">
                    <div class="col-md-4">
                        <table class="table align-items-center">
                            <tbody>
                                <tr>
                                    <td>Penulis</td>
                                    <td>{{ $data->penulis->name }}</td>
                                </tr>

                                <tr>
                                    <td>Penerbit</td>
                                    <td>{{ $data->penerbit->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <h6>Sinopsis:</h6>
                        <div>
                            {!! $data->deskripsi !!}
                        </div>
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
                                    <p>Jumlah : {{$data->jumlah}}</p>
                                </div>
                                <div class="col-6 align-items-center">
                                    @if ($data->jumlah == 0)
                                        <div
                                            class="card text-center p-2 shadow bg-gradient-danger text-white font-weight-bold">
                                            Habis
                                        </div>
                                    @else
                                        <div
                                            class="card text-center p-2 shadow bg-gradient-success text-white font-weight-bold">
                                            Tersedia
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <h6>Position: </h6>
                            <table class="table align-items-center">
                                <tbody>
                                    <tr>
                                        <td>Rak nomor</td>
                                        <td>:</td>
                                        <td>{{$data->rak->no}}</td>
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
