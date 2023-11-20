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
            <div class="col-lg-5 col-md-5">
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
                <div class="card shadow-none border">
                    <div class="p-3">
                        <div class="row border-bottom">
                            <div class="col-6">
                                <h6>Ketersediaan:</h6>
                                <p>stok: 12</p>
                            </div>
                            <div class="col-6 align-items-center">
                                <div class="card text-center p-2 shadow bg-dark text-white font-weight-bold">
                                    Tersedia
                                </div>
                            </div>
                        </div>
                            <h6>Position: </h6>
                            <p>a</p>
                        <button class="btn btn-dark w-100">pinjam</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
